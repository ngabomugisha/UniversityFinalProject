package com.example.shakeforemergency;

import android.content.Context;
import android.graphics.Color;
import android.hardware.Sensor;
import android.hardware.SensorEvent;
import android.hardware.SensorEventListener;
import android.hardware.SensorManager;
import android.location.LocationListener;
import android.location.LocationManager;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.text.TextUtils;
import android.util.Log;
import android.widget.Button;
import android.widget.TextView;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.Map;
import java.util.Random;



public class MainActivity extends AppCompatActivity implements SensorEventListener,LocationListener {

    private static final int REQUEST_CALL = 1;

    private LocationManager locationManager;
    private LocationListener listener;

    private static final String TAG = "MainActivity";
    private SensorManager sensorManager;
    private Sensor accelerometer;
    private float mAccel; // acceleration apart from gravity
    private float mAccelCurrent; // current acceleration including gravity
    private float mAccelLast; // last acceleration including gravity

    long curTime;
    long lastDataCollect, lastSave = System.currentTimeMillis();

    public float latitudeData = (float) 0.0;
    public float longitudeData = (float) 0.0;

    ArrayList HorizArrayData;
    ArrayList VertArrayData;
    ArrayList AzmutArrayData;
    ArrayList TimeStaArrayData;
    RequestQueue requestQueue;
    public TextView z, x, y, t, loc;
    public Button b;
    String insert = "http://192.168.43.209/chartjs/data.php";
    public String tvLati;

    public String tvLongi;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //CheckPermission();

        sensorManager = (SensorManager) getSystemService(SENSOR_SERVICE);
        //initiated here once and used many times when the onSensorChanged method is invoked
        HorizArrayData = new ArrayList();
        VertArrayData = new ArrayList();
        AzmutArrayData = new ArrayList();
        TimeStaArrayData = new ArrayList();

        requestQueue = Volley.newRequestQueue(getApplicationContext());
        z = findViewById(R.id.z);
        x = findViewById(R.id.x);
        y = findViewById(R.id.y);
        loc = findViewById(R.id.loc);
        Log.d(TAG, "onCreate: initializing  sensor service");
        sensorManager = (SensorManager) getSystemService(Context.SENSOR_SERVICE);
        accelerometer = sensorManager.getDefaultSensor(Sensor.TYPE_ACCELEROMETER);

        if (accelerometer != null) {
            sensorManager.registerListener(MainActivity.this, accelerometer, SensorManager.SENSOR_DELAY_NORMAL);
            Log.d(TAG, "onCreate: Registered accelerometer listerner");
        } else {
            z.setText("acc not responding");
        }

    }

    /**
     * Called when pointer capture is enabled or disabled for the current window.
     *
     * @param hasCapture True if the window has pointer capture.
     */
    @Override
    public void onPointerCaptureChanged(boolean hasCapture) {

    }

    @Override
    public void onSensorChanged(SensorEvent event) {


        Sensor sensor = event.sensor;

        if (sensor.getType() == Sensor.TYPE_ACCELEROMETER) {
            Log.d(TAG, "onSensorChanged: X:" + event.values[0] + "y: " + event.values[1] + "z: " + event.values[2]);

            x.setText("xValue: " + event.values[0]);
            y.setText("yValue: " + event.values[1]);
            z.setText("zValue: " + event.values[2]);


                float[] values = event.values;
                float xVal = values[0];
                float yVal = values[1];
                float zVal = values[2];
                //float accelationSquareRoot = (xVal * xVal + yVal * yVal + zVal * zVal) / (SensorManager.GRAVITY_EARTH * SensorManager.GRAVITY_EARTH);

                mAccelLast = mAccelCurrent;
                mAccelCurrent = (float) Math.sqrt((double) (xVal * xVal + yVal * yVal + zVal * zVal));
                float delta = mAccelCurrent - mAccelLast;
                mAccel = mAccel * 0.9f + delta; // perform low-cut filter

                if (mAccel > 20) {
                    Random rnd = new Random();
                    int color = Color.argb(255, rnd.nextInt(256), rnd.nextInt(256), rnd.nextInt(256));
                    //  ServiceActivity.tvShakeService.setText("Service detects the Shake Action!! Color is also changed..!!!");
                    x.setText("color");
                    x.setTextColor(color);
                                }


                HorizArrayData.add(xVal);
                VertArrayData.add(yVal);
                AzmutArrayData.add(zVal);
                TimeStaArrayData.add(curTime);

                  // line used to upoad data
                    // uploadNewAcceleroData(HorizArrayData, VertArrayData, AzmutArrayData, TimeStaArrayData);

        }
    }


    @Override
    public void onAccuracyChanged(Sensor sensor, int accuracy) {

    }

    //function to record new data
    private void uploadNewAcceleroData(ArrayList horizArrayData, ArrayList vertArrayData, ArrayList azmutArrayData,ArrayList timeStaArrayData) {

        RequestQueue queue = Volley.newRequestQueue(this);
        String url ="http://192.168.43.209/chartjs/data.php";


        //convert our arraylist object into strings using this nice utility called TextUtils
        final String horizData = TextUtils.join(", ", horizArrayData );
        final String vertData = TextUtils.join(", ", vertArrayData);
        final String azmutData = TextUtils.join(", ", azmutArrayData);
        final String timeStaData = TextUtils.join(", ", timeStaArrayData);
        //gps

        StringRequest strRequest = new StringRequest(Request.Method.POST, url,
                new Response.Listener<String>()
                {
                    @Override
                    public void onResponse(String response)
                    {
                       // Toast.makeText(MainActivity.this,"some php errors  1:" + response.toString(), Toast.LENGTH_LONG).show();
                    }
                },
                new Response.ErrorListener()
                {
                    @Override
                    public void onErrorResponse(VolleyError error)
                    {
               //         Toast.makeText(MainActivity.this, "some php errors  2:" + error.getMessage(), Toast.LENGTH_LONG).show();
                    }
                })
        {
            @Override
            protected Map<String, String> getParams()
            {
                Map<String, String> params = new HashMap<String, String>();
                params.put("Horizontal", horizData.toString());
                params.put("Vertical", vertData.toString());
                params.put("Azmut",  azmutData.toString());
                params.put("TimeStamp",  timeStaData.toString());
                return params;
            }
        };
        queue.add(strRequest);
    }
}

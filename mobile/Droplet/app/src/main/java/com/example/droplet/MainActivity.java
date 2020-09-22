package com.example.droplet;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity implements View.OnClickListener {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Button btnStart = (Button) findViewById(R.id.btnStart);
        Button btnCad = (Button) findViewById(R.id.btnCad);
        Button btnSair = (Button) findViewById(R.id.btnSair);
        btnStart.setOnClickListener(this);
        btnCad.setOnClickListener(this);
        btnSair.setOnClickListener(this);
    }

    public void onClick(View v) {
        switch (v.getId()) {
            case R.id.btnStart:
                Intent a = new Intent(MainActivity.this, Login.class);
                startActivity(a);
                break;
            case R.id.btnCad:
                startActivity(new Intent(Intent.ACTION_VIEW, Uri.parse("http://www.google.com")));
                break;
            case R.id.btnSair:
                finish();
        }
    }
}

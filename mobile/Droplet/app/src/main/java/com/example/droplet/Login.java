package com.example.droplet;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

public class Login extends Activity implements View.OnClickListener{

    private String senha;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        TextView email = (TextView) findViewById(R.id.email);
        Button btnLog = (Button) findViewById(R.id.btnLog);
        btnLog.setOnClickListener(this);
    }

    public void onClick(View v) {
        Intent a = new Intent(Login.this, Home.class);
        startActivity(a);
    }
}

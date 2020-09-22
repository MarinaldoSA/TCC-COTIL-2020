package com.example.droplet;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Button;
import android.widget.TextView;

public class Home extends Activity {
    private WebView webview;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);

        webview = (WebView) findViewById(R.id.webView);
        webview.setWebViewClient(new WebViewClient());
        webview.loadUrl("http://143.106.241.3/~cl18137/www");
    }
}

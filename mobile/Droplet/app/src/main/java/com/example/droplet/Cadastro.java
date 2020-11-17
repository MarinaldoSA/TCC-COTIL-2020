package com.example.droplet;

import android.content.Intent;
import android.os.Bundle;
import android.os.StrictMode;
import android.view.View;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.Toast;

import org.apache.http.*;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import androidx.appcompat.app.AppCompatActivity;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.UnsupportedEncodingException;
import java.net.HttpURLConnection;
import java.net.URLEncoder;
import java.util.ArrayList;


public class Cadastro extends AppCompatActivity {
    EditText txtCpf, txtNome;
    Button btnCadastro;
    //ListView listaRegistros;

    @Override
    protected void onCreate(Bundle savedInstanceState){
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cadastro);

        txtCpf = findViewById(R.id.txtCpf);
        txtNome = findViewById(R.id.txtNome);
        btnCadastro = findViewById(R.id.btnCadastro);

        if (android.os.Build.VERSION.SDK_INT > 9){
            StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();
            StrictMode.setThreadPolicy(policy);
        }
    }

    public void onClick(View v) {
        switch (v.getId()){
            case R.id.btnCadastro:
                Toast.makeText(this, "Botão OK", Toast.LENGTH_SHORT).show();
                gravaDados('I');
        }
    }

    public void buscaDados(){
        runOnUiThread(
                new Runnable() {
                    @Override
                    public void run() {
                        try{
                            // Abrir um client HTTP
                            DefaultHttpClient clienteHTTP = new DefaultHttpClient();

                            //Cria a requisição
                            HttpGet requisicaoHTTP = new HttpGet(
                                    "http://143.106.241.3/~cl18137/buscaDados.php");

                            // pegar a resposta do HTTP
                            HttpResponse resposta = clienteHTTP.execute(requisicaoHTTP);

                            // leitor do conteudo da pagina HTTP
                            BufferedReader leitorHTTP = new BufferedReader(
                                    new InputStreamReader(resposta.getEntity().getContent(), "UTF-8"));

                            String leitorJson = leitorHTTP.readLine();

                            // magica - transformar uma string em array JSon
                            JSONArray saidaJson = new JSONArray(leitorJson);

                            // array responsável por receber o JSon e transformar em arraylist
                            final ArrayList<Cliente> listaCliente = new ArrayList<>();

                            for(int indiceArray = 0; indiceArray < saidaJson.length(); indiceArray++){
                                JSONObject linhaJson = saidaJson.getJSONObject(indiceArray);

                                //separar os itens da linha JSon
                                String cpf       = linhaJson.getString("cpf");
                                String nome = linhaJson.getString("nome");

                                //colocar estes itens numa linha de listaNotaTCC
                                Cliente linhaCliente = new Cliente();
                                linhaCliente.cpf             = cpf;
                                linhaCliente.nome        = nome;

                                //colocar a linha no array listaNotaTCC
                                listaCliente.add(linhaCliente);
                            }

                            /*
                            //montar meu listView
                            // criar o adaptador de notaTCC
                            AdaptCliente adaptador = new AdaptCliente(getApplicationContext(), listaCliente);
                            listaRegistros.setAdapter(adaptador);

                            //tratar o clique para preencher a tela
                            listaRegistros.setOnItemClickListener(new AdapterView.OnItemClickListener() {
                                @Override
                                public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                                    for(int posicaoClicada = 0; posicaoClicada < listaCliente.size(); posicaoClicada++){
                                        if(position == posicaoClicada){
                                            txtCpf.setText(listaCliente.get(posicaoClicada).cpf);
                                            txtNome.setText(listaCliente.get(posicaoClicada).nome);
                                        }
                                    }
                                }
                            });
                             */

                        } catch (UnsupportedEncodingException e) {
                            e.printStackTrace();
                        } catch (ClientProtocolException e) {
                            e.printStackTrace();
                        } catch (IOException e) {
                            e.printStackTrace();
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                    }
                }
        );
    }

    public void gravaDados(char tipoOperacao){
        try {
            DefaultHttpClient clienteHTTP = new DefaultHttpClient();

            HttpGet requisicaoHTTP = new HttpGet(
                    "http://143.106.241.3/~cl18137/gravaDados.php" +
                            "?tipoOperacao=" + tipoOperacao +
                            "&cpf=" + URLEncoder.encode(txtCpf.getText().toString(),"UTF-8") +
                            "&nome=" + URLEncoder.encode(txtNome.getText().toString(),"UTF-8") );

            // pegar a resposta do HTTP
            HttpResponse resposta = clienteHTTP.execute(requisicaoHTTP);

            // leitor do conteudo da pagina HTTP
            BufferedReader leitor = new BufferedReader(
                    new InputStreamReader(resposta.getEntity().getContent(), "UTF-8"));

            String Json = leitor.readLine();
            Toast.makeText(this, "Operação realizada com sucesso!", Toast.LENGTH_SHORT).show();

            txtCpf.setText("");
            txtNome.setText("");
            buscaDados();
        } catch (ClientProtocolException e) {
            Toast.makeText(this, "Operação Falhou" +e.getMessage(), Toast.LENGTH_SHORT).show();
            e.printStackTrace();
        } catch (IOException e) {
            Toast.makeText(this, "Operação Falhou" +e.getMessage(), Toast.LENGTH_SHORT).show();
            e.printStackTrace();
        }
    }
}

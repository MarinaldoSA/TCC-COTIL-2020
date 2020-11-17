package com.example.droplet;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.TextView;

import java.util.ArrayList;

public class AdaptCliente extends BaseAdapter {

    Context ctx;
    ArrayList<Cliente> listaCliente;

    public AdaptCliente(Context ctxFora, ArrayList<Cliente> listaClienteFora){
        this.ctx     = ctxFora;
        this.listaCliente = listaClienteFora;
    }

    @Override
    public int getCount() {
        return listaCliente.size();
    }

    @Override
    public Object getItem(int position) {
        return listaCliente.get(position);
    }

    @Override
    public long getItemId(int position) {
        return position;
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        if (convertView ==  null) {
            convertView = LayoutInflater.from(ctx).inflate(R.layout.layout_cliente,parent, false);
        }

        // pega o valor do layout_banco
        TextView txtCpfListView, txtNomeListView;
        txtCpfListView              = (TextView) convertView.findViewById(R.id.txtLayoutCpf);
        txtNomeListView       = (TextView) convertView.findViewById(R.id.txtLayoutNome);

        //seta na tela o valor pego
        txtCpfListView.setText(listaCliente.get(position).cpf);
        txtNomeListView.setText(listaCliente.get(position).nome);

        return convertView;
    }
}

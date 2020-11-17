
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.swing.JButton;
import javax.swing.JOptionPane;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author joaomuniz
 */
public class Conexao {
    
        Connection con;
    
    public boolean conecta(String local, String banco, String usuario, String senha)
    {
        boolean retorno = false;
        try
        {
            Class.forName("com.mysql.jdbc.Driver");
            con = DriverManager.getConnection("jdbc:mysql://" + local + "/" + banco,usuario, senha);
            retorno = true;
        }
        catch (ClassNotFoundException e){
            System.err.println("Erro de conexão:\n" + e);
        }
        catch (SQLException e){
            System.err.println("Erro de conexão:\n" + e);
        }
        return retorno;
    }
    
    public boolean insere(String tabela, String codigo, String desc, String preco, String nome, String CNPJ){
        boolean retorno = false;
    try {
        PreparedStatement stmt = (PreparedStatement) this.con.prepareStatement("insert into " + tabela + " (CodRef,descricao,preco,nome,fornecedor) values (' " + codigo + " ',' " + desc + " ', '" + preco +"', '" + nome +"', '"+ CNPJ +"');");
        stmt.execute();
        stmt.close();
        retorno = true;
    } 
    catch (SQLException ex) {
        //System.err.println("Erro INSERT: " + ex);
        JOptionPane.showMessageDialog(null, "Cadastro Já Efetuado");
    }
        return retorno;
    }
    
    public ResultSet consulta(String consulta){
        ResultSet rs = null;
        try{
            PreparedStatement stmt;
            stmt = (PreparedStatement) this.con.prepareStatement(consulta);
            rs = stmt.executeQuery();
        }
        catch (SQLException e){
            System.err.println("Erro CONSULTA: " +e);
        }
        return rs;
    }
    
    public boolean atualiza(String tabela, String campos, String condicao){
        boolean retorno = false;
        try{
            PreparedStatement stmt = (PreparedStatement) this.con.prepareStatement("update " + tabela + " set " + campos + " where " + condicao);
            stmt.executeUpdate();
            stmt.close();
            retorno = true;
        }
        catch (SQLException ex){
            System.err.println("Erro UPDATE: " + ex);
        }
        return retorno; 
    }
    
    public boolean exclui(String tabela, String nome){
        boolean retorno = false;
        try{
            PreparedStatement stmt = (PreparedStatement) this.con.prepareStatement("delete from " + tabela + " where nome = ' " + nome + " '");
            stmt.executeUpdate();
            stmt.close();
            retorno = true;
        }
        catch (SQLException ex){
            System.err.println("Error DELETE:" + ex);
        }
        return retorno;
    }
        
    public boolean excluiProd(String tabela, String codigo){
        boolean retorno = false;
        try{
            PreparedStatement stmt = (PreparedStatement) this.con.prepareStatement("delete from " + tabela + " where CodRef = '" + codigo + "'");
            stmt.executeUpdate();
            stmt.close();
            retorno = true;
        }
        catch (SQLException ex){
            System.err.println("Error DELETE:" + ex);
        }
        return retorno;
    }
    
        
    public boolean inserePedido(String tabela, String CPF, String total, String qtd, String CNPJ, String data, String CodRef){
        boolean retorno = false;
    try {
            try (PreparedStatement stmt = (PreparedStatement) this.con.prepareStatement("insert into " + tabela + " (quantidade,total,data,CNPJ,CPF,CodRef) values (' " + qtd + " ',' " + total + " ', '" + data +"', '" + CNPJ +"', '"+ CPF +"', '"+ CodRef +"');")) {
                stmt.execute();
            }
        retorno = true;
    } 
    catch (SQLException ex) {
        //System.err.println("Erro INSERT: " + ex);
        JOptionPane.showMessageDialog(null, "Cadastro Já Efetuado");
    }
        return retorno;
    }
    
    
    public boolean insereProd(String tabela, String codigo, String desc, String preco,
    String nome, String CNPJ, String arquivo, String arquivo2, String arquivo3){
    boolean retorno = false;
        try {
            
            
             PreparedStatement stmt = (PreparedStatement)
             this.con.prepareStatement("insert into " + tabela + ""
             + " (CodRef,descricao,preco,nome,fornecedor,imagem,imagem2,imagem3) values (?,?,?,?,?,?,?,?);");
      

            stmt.setString(1, codigo);
            stmt.setString(2, desc);
            stmt.setString(3, preco);
            stmt.setString(4, nome);
            stmt.setString(5, CNPJ);
            
            if(arquivo!=null){
            File arq = new File(arquivo);
            FileInputStream inputStream = null;
            try {
            inputStream = new FileInputStream(arq);
            } catch (FileNotFoundException ex) {
            System.err.println("Erro - " + ex);
            }
            stmt.setBinaryStream(6,inputStream, (int) arq.length());
            }
            else
                stmt.setBinaryStream(6,null);

        
            if(arquivo2!=null){
            File arq2 = new File(arquivo2);
            FileInputStream inputStream2 = null;
            try {
            inputStream2 = new FileInputStream(arq2);
            } catch (FileNotFoundException ex) {
            System.err.println("Erro - " + ex);
            }
            stmt.setBinaryStream(7,inputStream2, (int) arq2.length());
            }
            else
                stmt.setBinaryStream(7,null);
            
            if(arquivo3!=null){
            File arq3 = new File(arquivo3);
            FileInputStream inputStream3 = null;
            try {
            inputStream3 = new FileInputStream(arq3);
            } catch (FileNotFoundException ex) {
            System.err.println("Erro - " + ex);
            }
            stmt.setBinaryStream(8,inputStream3, (int) arq3.length());
            }
            else
                stmt.setBinaryStream(8,null);
            
            stmt.execute();
            stmt.close();
            retorno = true;
            } catch (SQLException ex) {
            System.err.println("Erro INSERT: " + ex);
            }
            
            
            
            return retorno;
          }
    
        public boolean excluiPedido(String tabela, String id){
        boolean retorno = false;
        try{
            PreparedStatement stmt = (PreparedStatement) this.con.prepareStatement("delete from " + tabela + " where id = ' " + id + " '");
            stmt.executeUpdate();
            stmt.close();
            retorno = true;
        }
        catch (SQLException ex){
            System.err.println("Error DELETE:" + ex);
        }
        return retorno;
    }
    
    }
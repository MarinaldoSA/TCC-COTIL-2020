
import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author joaomuniz
 */
public class Arquivo {
    public static boolean pesquisar(String arquivo, String
    pesquisa) throws FileNotFoundException, IOException {
        File file = new File(arquivo);
        boolean retorno = false;
        if (!file.exists()) {
        System.out.println("Arquivo não existe!");
        return retorno;
        }
        BufferedReader br = new BufferedReader(new
        FileReader(arquivo));
        String saida = "";
        String linha;
        while((linha = br.readLine()) != null ) {
        if (linha.equals(pesquisa)){
        retorno = true;
        break;
        }
        }
        br.close();
        return retorno;
    }
    
    public static String consultaNome(String arquivo, String
    nome, int campo) throws FileNotFoundException, IOException {
        File file = new File(arquivo);
        String retorno = null;
        if (!file.exists()) {
            System.out.println("Arquivo não existe!");
            return retorno;
        }
        BufferedReader br = new BufferedReader(new
        FileReader(arquivo));
        String[] campos;
        String linha;
        while((linha = br.readLine()) != null ) {
            campos = linha.split(",");
            if(campos[campo].equals(nome)){
                retorno = linha;
                break;
            }
        }
        br.close();
        return retorno;
    }
    
    public void alteraLinha(String linhaAntiga, String linhaNova, String arquivo) throws IOException {
        String arquivoTmp = arquivo + "-tmp.txt";
        arquivo = arquivo + ".txt";
        

        BufferedWriter writer = new BufferedWriter(new FileWriter(arquivoTmp));
        BufferedReader reader = new BufferedReader(new FileReader(arquivo));

        String linha;
        while ((linha = reader.readLine()) != null) {
            if (linha.equals(linhaAntiga)) {
                linha = linhaNova;
            }
            writer.write(linha + "\n");
        }

        writer.close();        
        reader.close();

        new File(arquivo).delete();
        new File(arquivoTmp).renameTo(new File(arquivo));
    }
    
    public static String listaProd(String arquivo, int campo) throws
        FileNotFoundException, IOException {
        File file = new File(arquivo);
        if (!file.exists()) return null;
        BufferedReader br = new BufferedReader(new FileReader(arquivo));
        String saida = "";
        String linha;
        String[] aux;
        while((linha = br.readLine()) != null ) {
            aux = linha.split(",");
            saida += aux[campo] + ",";
        }
        br.close();
        return saida;
    }
    
    public void deletar(String linhaDel, String arquivo) throws IOException {
        String arquivoTmp = arquivo + "-tmp.txt";
        arquivo = arquivo + ".txt";
        

        BufferedWriter writer = new BufferedWriter(new FileWriter(arquivoTmp));
        BufferedReader reader = new BufferedReader(new FileReader(arquivo));

        String linha;
        while ((linha = reader.readLine()) != null) {
            if (linha.equals(linhaDel)) {
                continue;
            }
            writer.write(linha + "\n");
        }

        writer.close();        
        reader.close();

        new File(arquivo).delete();
        new File(arquivoTmp).renameTo(new File(arquivo));
    }
    
    public static void salvar(String arquivo, String conteudo,
    boolean adicionar) throws IOException {
        FileWriter fw = new FileWriter(arquivo, adicionar);
        fw.write(conteudo+"\n");
        fw.close();
    }
    
    public static String consultaPedido(String arquivo, String
    nome, int campo) throws FileNotFoundException, IOException {
        File file = new File(arquivo);
        String retorno = null;
        if (!file.exists()) {
            System.out.println("Arquivo não existe!");
            return retorno;
        }
        BufferedReader br = new BufferedReader(new
        FileReader(arquivo));
        String[] campos;
        String linha;
        while((linha = br.readLine()) != null ) {
            campos = linha.split(",");
            if(campos[campo].equals(nome)){
                retorno = linha;
                break;
            }
        }
        br.close();
        return retorno;
    }
    
}

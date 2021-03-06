
import java.awt.FileDialog;
import java.awt.Frame;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStream;
import java.sql.ResultSet;
import java.util.Arrays;
import javax.imageio.ImageIO;
import javax.swing.ImageIcon;
import javax.swing.JButton;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author User
 */
public class AlterarDados extends javax.swing.JInternalFrame {
    private String login;
    Conexao d = new Conexao();
    private String arquivo = null;
    public void carregaImagem(JButton botao, String arquivo)
    {
        System.out.println(arquivo);
        try {
        File f = new File(arquivo);
        BufferedImage bufi = ImageIO.read(f);
        ImageIcon ico = new ImageIcon(bufi);
        ico.setImage(ico.getImage().getScaledInstance(botao.getWidth(), botao.getHeight(), 1));
        botao.setIcon(ico);
        } catch(Exception e) {
        e.printStackTrace();
        }
    }
    
    public byte[] imageToByte(String image) throws IOException {
        InputStream is = null;
        byte[] buffer = null;
        is = new FileInputStream(image);
        buffer = new byte[is.available()];
        is.read(buffer);
        is.close();
        return buffer;
    }  
    /**
     * Creates new form AlterarDados
     */
    public AlterarDados(String login) {
        initComponents();
        this.login = login;
        
        try{
            
            d.conecta("143.106.241.3","cl18137","cl18137","cl*18022003");
            ResultSet result = d.consulta("SELECT * FROM TCC_fornecedor WHERE CNPJ = '"+this.login+"'");
            if(result.next() && result != null){
            nomeFan.setText(result.getString("nomeFantasia"));
            slogan.setText(result.getString("razaoSocial"));
            descricao.setText(result.getString("descricao"));
                if(result.getBlob("fotoPERFIL") != null){
                    
                    java.sql.Blob blob = result.getBlob("fotoPERFIL");
                    ImageIcon img = new ImageIcon(blob.getBytes(1, (int)blob.length()));
                    System.out.println(img);             
                    imagem.setIcon(img);

                    
                }
            }
        }
        catch(Exception e){
            e.printStackTrace();
        }
       }
    

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        nomeFan = new javax.swing.JTextField();
        slogan = new javax.swing.JTextField();
        jScrollPane1 = new javax.swing.JScrollPane();
        descricao = new javax.swing.JTextArea();
        jButton1 = new javax.swing.JButton();
        jLabel4 = new javax.swing.JLabel();
        aviso = new javax.swing.JLabel();
        imagem = new javax.swing.JButton();

        setClosable(true);
        setIconifiable(true);
        setMaximizable(true);
        setTitle("Alterar Dados");

        jLabel1.setFont(new java.awt.Font("Arial", 0, 12)); // NOI18N
        jLabel1.setText("Nome Fantasia:");

        jLabel2.setFont(new java.awt.Font("Arial", 0, 12)); // NOI18N
        jLabel2.setText("Descrição da Empresa:");

        jLabel3.setFont(new java.awt.Font("Arial", 0, 12)); // NOI18N
        jLabel3.setText("Slogan:");

        descricao.setColumns(20);
        descricao.setRows(5);
        jScrollPane1.setViewportView(descricao);

        jButton1.setFont(new java.awt.Font("Arial", 0, 14)); // NOI18N
        jButton1.setText("Alterar Dados");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });

        imagem.setText("foto de Perfil");
        imagem.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                imagemActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGap(138, 138, 138)
                        .addComponent(jButton1)
                        .addGap(20, 20, 20)
                        .addComponent(aviso)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jLabel4)
                        .addContainerGap(289, Short.MAX_VALUE))
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addComponent(jLabel1)
                            .addComponent(jLabel3)
                            .addComponent(jLabel2))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                            .addComponent(slogan)
                            .addComponent(nomeFan)
                            .addComponent(jScrollPane1))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addComponent(imagem, javax.swing.GroupLayout.PREFERRED_SIZE, 199, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(25, 25, 25))))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addComponent(aviso)
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING, false)
                            .addGroup(layout.createSequentialGroup()
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                                    .addComponent(jLabel1)
                                    .addComponent(nomeFan, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                                .addGap(9, 9, 9)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                                    .addComponent(slogan)
                                    .addComponent(jLabel3, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(jLabel2)
                                    .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)))
                            .addComponent(imagem, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(layout.createSequentialGroup()
                                .addGap(27, 27, 27)
                                .addComponent(jLabel4))
                            .addGroup(layout.createSequentialGroup()
                                .addGap(18, 18, 18)
                                .addComponent(jButton1)))))
                .addContainerGap(25, Short.MAX_VALUE))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        // TODO add your handling code here:
        if(nomeFan.getText().equals("") || slogan.getText().equals("") || descricao.getText().equals("")){
            aviso.setText("Preencha todos os campos!!");
        }
        else{
           
            if(arquivo != null){               
                try{
                    d.atualiza("TCC_fornecedor", "nomeFantasia = '"+nomeFan.getText()
                    +"', razaoSocial = '"+slogan.getText()+"', descricao = '"+descricao.getText()+"', fotoPERFIL = '"+ this.imageToByte(arquivo) +"'",
                    " CNPJ = '"+login+"'");
                    aviso.setText("Alterado com Sucesso!!");
                }
                catch(Exception e){
                    e.printStackTrace();
                }
            }
            else{
                try{
                    d.atualiza("TCC_fornecedor", "nomeFantasia = '"+nomeFan.getText()
                    +"', razaoSocial = '"+slogan.getText()+"', descricao = '"+descricao.getText()+"'",
                    " CNPJ = '"+login+"'");
                    aviso.setText("Alterado com Sucesso!!");
                }
                catch(Exception e){
                    e.printStackTrace();
                }
            }
        }
    }//GEN-LAST:event_jButton1ActionPerformed

    private void imagemActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_imagemActionPerformed
        // TODO add your handling code here:
        FileDialog fileDialog = new FileDialog((Frame)null);
        fileDialog.setVisible(true);
        carregaImagem(imagem,fileDialog.getDirectory() + fileDialog.getFile());
        arquivo = fileDialog.getDirectory() + fileDialog.getFile();
    }//GEN-LAST:event_imagemActionPerformed


    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel aviso;
    private javax.swing.JTextArea descricao;
    private javax.swing.JButton imagem;
    private javax.swing.JButton jButton1;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JTextField nomeFan;
    private javax.swing.JTextField slogan;
    // End of variables declaration//GEN-END:variables
}

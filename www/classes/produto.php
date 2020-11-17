<?php
class produto
{
  private $Cod;
  private $nome;
  private $preco;
  private $avaliacao;
  private $fornecedor;
  private $descricao;
  private $imagem;

  
  

  public function getCod() 
  {
    return $this->Cod;
  }
  public function setCod($cod)
  {
    $this->Cod = $cod;
  }
  public function getNome() 
  {
    return $this->nome;
  }
  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function getPreco() 
  {
    return $this->preco;
  }
  public function setPreco($preco)
  {
    $this->preco = $preco;
  }
  public function getAvaliacao() 
  {
    return $this->avaliacao;
  }
  public function setAvaliacao($avaliacao)
  {
    $this->avaliacao = $avaliacao;
  }
  public function getFornecedor() 
  {
    return $this->fornecedor;
  }
  public function setFornecedor($fornecedor)
  {
    $this->fornecedor = $fornecedor;
  }
  public function getDescricao() 
  {
    return $this->descricao;
  }
  public function setDescricao($descricao)
  {
    $this->descricao = $descricao;
  }
  public function getImagem()
  {
    return $this->imagem;
  }
  public function setImagem($imagem)
  {
    $this->imagem = $imagem;
  }
  public function imprimeCard()
  {
     echo "
      <br>     
      
      <div style=\" margin-left:33%; \" class=\"text-center div-card \">
        <div class=\"card col-5 \">
          <img src=\"" . $this->imagem . "\" class=\"card-img-top img-responsive \" alt=\"...\">
          <div class=\"card-body\">
            <p class=\"card-text\">".$this->nome."</p>
            <p class=\"color3\">FRETE GRÁTIS</p>
            <p>Oferecido por: ".$this->fornecedor."</p>
            <p>R$".$this->preco."</p>
            <p>".$this->descricao.".</p>
           <!-- Button trigger modal -->
           <button type=\"button\" class=\"btn btn-success btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#exampleModa2\">COMPRAR
            </button>

           <!-- Modal -->
            <div class=\"modal fade\" id=\"exampleModa2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                  <h5 class=\"modal-title\" id=\"exampleModalLabel\"></h5>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                  </button>
                  </div>
                  <div class=\"modal-body\">
                    <div class=\"card mb-3\" style=\"max-width: 540px;\">
                      <div class=\"row no-gutters\">
                        <div class=\"col-md-4\">
                        <img src=\"" . $this->imagem . "\" class=\"card-img\" alt=\"...\">
                        </div>
                        <div class=\"col-md-8\">
                          <div class=\"card-body\">
                            <h5 class=\"card-title\">".$this->nome."</h5>
                            <p class=\"card-text\">
                              <p>Oferecido por:".$this->fornecedor."</p>
                              <p>R$".$this->preco."</p>
                              <p>Código do Produto:".$this->Cod."</p>
                            </p>
                            <a href=\"?adicionar<?php". $this->Cod."?>\"> Adicionar ao Carrinho </a>
                            <form action=\" ../functions/addAoCarrinho.php \" method = \" POST \">
                            <input type=\"submit\" id=\"".$this->Cod." \" class=\"btn btn-success btn-lg btn-block\" value = \" Adicionar ao Carrinho \"></input>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class=\"card col-3 \"></div>          
      </div>
                 
      ";
  }
}
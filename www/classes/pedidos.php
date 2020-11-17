<?php
class pedidos
{
  private $id;
  private $valorTotal;
  private $data;
  private $quantidade;
  private $cnpjVendedor;
  private $cpfComprador;
  private $codRef;

  public function getId()
  {
    return $this->id;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getValor()
  {
    return $this->valorTotal;
  }
  public function setValor($valorTotal)
  {
    $this->valorTotal = $valorTotal;
  }
  public function getData()
  {
    return $this->id;
  }
  public function setData($data)
  {
    $this->data = $data;
  }
  public function getQuantidade()
  {
    return $this->quantidade;
  }
  public function setQuantidade($quantidade)
  {
    $this->quantidade = $quantidade;
  }
  public function getCNPJ()
  {
    return $this->cnpj;
  }
  public function getCPF()
  {
    return $this->cpf;
  }
  public function getCod()
  {
    return $this->codRef;
  }
  public function setCod()
  {
    $this->codRef = $codRef;
  }
}


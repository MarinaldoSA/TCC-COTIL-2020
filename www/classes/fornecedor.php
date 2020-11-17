<?php

class fornecedor
{
  private $cnpj;
  private $nomeFantasia;
  private $email;
  private $senha;
  private $razaoSocial;
  private $descricao;

  public function getCNPJ()
  {
    return $this->cnpj;
  }
  public function setCNPJ($cnpj)
  {
    $this->$cnpj = $cnpj;
  }
  public function getNomeFantasia()
  {
    return $this->nomeFantasia;
  }
  public function setNomeFantasia($nomeFantasia)
  {
    $this->$nomeFantasia = $nomeFantasia;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setEmail($email)
  {
    $this->$email = $email;
  }
  public function getSenha()
  {
    return $this->senha;
  }
  public function setSenha($senha)
  {
    $this->senha = $senha;
  }
  public function getRazaoSocial()
  {
    return $this->razaoSocial;
  }
  public function setRazaoSocial($razaoSocial)
  {
    $this->razaoSocial = $razaoSocial;
  }
  public function getDescricao()
  {
    return $this->descricao;
  }
  public function setDescricao($descricao)
  {
    $this->descrição = $descricao;
  }
}
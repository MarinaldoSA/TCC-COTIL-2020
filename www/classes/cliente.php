<?php
class cliente
{
  private $cpf;
  private $nome;
  private $senha;
  private $dataNascimento;

  public function getCPF() 
  {
    return $this->cpf;
  }
  public function setCPF($cpf)
  {
    $this->cpf = $cpf;
  }
  public function getNome() 
  {
    return $this->nome;
  }
  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function getSenha()
  {
    return $this->senha;
  }
  public function setSenha($senha)
  {
    $this->senha = $senha;
  }
  public function getNascimento()
  {
    return $this->dataNascimento;
  }
  public function setNascimento($dataNascimento)
  {
    $this->$dataNascimento = $dataNascimento;
  }
}
<?php
class Inicio
{
  private $message;
  public function controller()
  {
    $inicio = new Template('view/inicio.html');
    $inicio->set('inicio', 'Seja bem vindo!');
    $this->message =  $inicio->saida();
  }
  public function getMessage()
  {
    return $this->message;
  }
}
<?php

class Cachorro
{

  public $nome;
  public $raca;
  public $cor;

  function __construct($nome, $raca, $cor)
  {
    $this->nome = $nome;
    $this->raca = $raca;
    $this->cor = $cor;
  }

  public function caracteristicas()
  {
    echo "O nome do cachorro é $this->nome, ele tem a cor $this->cor e é da raça $this->raca. <br>";
  }
}


$snow = new Cachorro("Snow", "Vira lata", "Branca");

$snow->caracteristicas();

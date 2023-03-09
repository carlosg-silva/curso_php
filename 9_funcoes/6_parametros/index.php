<?php

function velocidadeMaxima($vel)
{

  if (is_int($vel)) {
    echo "O carro atinge a velocidade máxima de $vel km/h <br>";
  } else {
    echo "Por favor, passe um número inteiro <br>";
  }
}

velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(100);

//Não pode
//velocidadeMaxim();

echo "Teste continuando <br>";

$velocidade = 123;

velocidadeMaxima($velocidade);

// PHP ignora parâmetro desnecessário 
velocidadeMaxima(250, "teste");

velocidadeMaxima("teste");

// Mais parâmetros
function descreverAnimal($nome, $raca)
{
  echo "O $nome é da raça $raca <br>";
}

descreverAnimal("Bob", "Vira Lata");
descreverAnimal("Shark", "Pastor Alemão");
descreverAnimal("Poodle", "Tita");

// Poucos parâmetros
// descreverAnimal("Poodle");

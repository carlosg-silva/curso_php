<?php

class Humano
{
}

class Animal
{
}

class Professor extends Humano
{
}

$marcos = new Humano;

$turca = new Animal;

if ($marcos instanceof Humano) {
  echo "Marcos é um Humano <br>";
}

if ($turca instanceof Humano) {
  echo "Marcos é um Humano <br>";
} else {
  echo "A Turca não é um humano <br>";
}

$pedro = new Professor;

if ($pedro instanceof Professor) {
  echo "Pedro é um Professor <br>";
} else {
  echo "Pedro não é um Professor <br>";
}

if ($pedro instanceof Humano) {
  echo "Pedro é um Humano <br>";
} else {
  echo "Pedro não é um humano <br>";
}

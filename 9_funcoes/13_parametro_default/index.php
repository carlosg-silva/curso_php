<?php

function teste($a = "teste")
{
  echo "O valor de A é: $a . <br>";
}


teste();
teste("asd");

function testando($b, $a = "x")
{
  echo "O valos de a é: $a e de b é: $b <br>";
}

testando("1");

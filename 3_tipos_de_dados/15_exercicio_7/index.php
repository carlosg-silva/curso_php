<?php

$user = ['nome' => 'Matheus', 'idade' => '17', 'faculdade' => true];

$nome = $user['nome'];
$idade = $user['idade'];

if ($idade >= 18) {
  echo "O usuário $nome é maior de idade.";
} else {
  echo "O usuário $nome não é maior de idade.";
}

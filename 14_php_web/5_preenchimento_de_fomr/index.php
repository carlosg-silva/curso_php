<?php

$usuario = [
  'nome' => 'Carlos',
  'idade' => 30,
  'profissao' => 'Programador'
];

if ($usuario) {
  $nome = $usuario['nome'];
  $idade = $usuario['idade'];
  $profissao = $usuario['profissao'];
}

?>

<!DOCTYPE html>
<html lang="p-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <form action="">
    <div>
      <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
    </div>

    <div>
      <input type="text" name="idade" placeholder="Digite seu nome" value="<?= $idade ?>">
    </div>

    <div>
      <input type="text" name="profissao" placeholder="Digite seu nome" value="<?= $profissao ?>">
    </div>

    <input type="submit" value="Enviar">
  </form>
</body>

</html>
<?php
session_start();

// print_r($_SESSION);
$_SESSION['nome'] = "Carlos";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>
</head>

<body>
  <h1>Olá Session</h1>
</body>

</html>
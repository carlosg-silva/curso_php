<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "curso_php";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA
$nome = "Teste";

$stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

$stmt->bind_param("s", $nome);

$stmt->execute();

$conn->close();

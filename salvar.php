<?php
//Conexão
$conn = new PDO("sqlite:lista");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$nome = $_GET["nome"];
$valor = $_GET["valor"];
$quantidade = $_GET["quantidade"];

$preparo = $conn->prepare("INSERT INTO itens (nome, valor, quantidade) VALUES(:nome, :valor, :quantidade);");

$preparo->bindParam(":nome", $nome);
$preparo->bindParam(":valor", $valor);
$preparo->bindParam(":quantidade", $quantidade);

$preparo->execute();

header("Location:index.php");
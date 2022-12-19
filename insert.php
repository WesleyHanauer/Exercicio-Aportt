<?php
require_once('conexao.php');

$localIP = getHostByName(getHostName());

$latitude = $_COOKIE['lat'];
$longitude = $_COOKIE['lon'];
$dataHora = $_COOKIE['dataHora'];
$caminhoImagem = $_COOKIE['caminhoImagem'];

$sql = "INSERT INTO dados (latitude, longitude, dataHora, ipMaquina, imagem) VALUES (?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$latitude, $longitude, $dataHora, $localIP, $caminhoImagem]);

header("Location: relatorio.php");
exit;
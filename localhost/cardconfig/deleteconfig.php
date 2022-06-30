<?php

$id = filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);


$dsn = 'mysql:host=localhost;dbname=realdy_db';
$pdo = new PDO($dsn, 'root', 'root');

$query = $pdo->prepare('DELETE FROM realty_info WHERE `id` = :id');
$query->execute(['id'=> $id]);

$pdo = null;
header('Location: http://localhost/delete_card.php');

?>











<!-- 

// $mysql = new mysqli('localhost', 'root', 'root', 'realdy_db');
// $mysql->query("DELETE FROM `realty_info` WHERE `id` = '$id'");
// $mysql->close(); -->
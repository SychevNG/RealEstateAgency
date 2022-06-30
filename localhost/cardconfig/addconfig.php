<?php

$title = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
$address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
$description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);
$img = filter_var(trim($_POST['img']), FILTER_SANITIZE_STRING);
$price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);

$dsn = 'mysql:host=localhost;dbname=realdy_db';
$pdo = new PDO($dsn, 'root', 'root');

$query = $pdo->prepare('INSERT INTO realty_info (title, address, description, img, price) VALUES (:title, :address, :description, :img, :price)');
$query->execute(['title'=> $title, 'address'=> $address, 'description'=> $description, 'img'=> $img, 'price'=> $price]);


$pdo = null;
header('Location: http://localhost/add_card.php');

?>








<!-- 
// $mysql = new mysqli('localhost', 'root', 'root', 'realdy_db');
// $mysql->query("INSERT INTO `realty_info` (`title`,`address`,`description`,`img`,`price`) VALUES ('$title','$address','$description','$img','$price')");
// $mysql->close(); -->
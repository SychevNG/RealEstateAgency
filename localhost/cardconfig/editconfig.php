<?php

$id = filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);

$title = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
$address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
$description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);
$img = filter_var(trim($_POST['img']), FILTER_SANITIZE_STRING);
$price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
$relevance = filter_var(trim($_POST['relevance']), FILTER_SANITIZE_STRING);


$mysgl = new mysqli('localhost', 'root', 'root', 'realdy_db');
$mysgl->query("UPDATE `realty_info` SET `title` = '$title', `address`='$address', `description`='$description', `img`='$img', `price`='$price', `relevance`='$relevance' WHERE `id`='$id'  ");
$mysgl->close();

header('Location: http://localhost/management.php');
exit();
?>
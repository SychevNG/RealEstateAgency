<?php

$login = $_POST['login'];
$password = $_POST['password'];

$dsn = 'mysql:host=localhost;dbname=realdy_db';
$pdo = new PDO($dsn, 'root', 'root');

$query = $pdo->prepare('SELECT * FROM authorization_info WHERE `login`=:login AND `password`=:password');
$query->execute(['login'=> $login, 'password'=> $password]);
$user = $query->fetch(PDO::FETCH_ASSOC);

if(!$user){
    echo "Такого пользователя не существует";
    exit();
}
setcookie('user', $user['login'], time() + 3600, "/");
$pdo = null;
header('Location: /');
?>












<!--
WHERE login=:login AND password=:password



// $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);  
// $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

// $password = md5($password."qwerty");

// $mysql = new mysqli('localhost', 'root', 'root', 'realdy_db');

// $result = $mysql->query("SELECT * FROM `authorization_info` WHERE `login` = '$login' AND `password` = '$password'");

// $user = $result->fetch_assoc();


// if(count($user) == 0){
//     echo "Такого пользователя не существует";
//     exit();
// }
// setcookie('user', $user['login'], time() + 3600, "/");

// $mysql->close();

// header('Location: /');










$login = $_POST['login'];
$password = $_POST['password'];


$dsn = 'mysql:host=localhost;dbname=realdy_db';
$pdo = new PDO($dsn, 'root', 'root');

// $sql = ('SELECT * FROM authorization_info WHERE `login`=:login AND `password`=:password');
$query = $pdo->prepare('SELECT * FROM authorization_info WHERE `login`=:login AND `password`=:password');
$query->execute(['login'=> $login, 'password'=> $password]);
$array = $query->fetch(PDO::FETCH_ASSOC);
print_r($query);
if($array){
    echo "Такого пользователя не существует";
    exit();
}
// $pdo = null;
// header('Location: /');







-->












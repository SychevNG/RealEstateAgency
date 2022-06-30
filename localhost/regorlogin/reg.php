<?php 

$login = $_POST['login'];
$password = $_POST['password'];

if(mb_strlen($login) < 5 || mb_strlen($login) > 50) {
    echo "Неподходящая длинна логина";
    exit();
}else if(mb_strlen($password) < 5 || mb_strlen($password) > 50) {
    echo "Неподходящая длинна пароля";
    exit();
};
    
$dsn = 'mysql:host=localhost;dbname=realdy_db';
$pdo = new PDO($dsn, 'root', 'root');

$query = $pdo->prepare('INSERT INTO authorization_info (login, password) VALUES (:login, :password)');
$query->execute(['login'=> $login, 'password'=> $password]);
$pdo = null;
header('Location: /');
?>










<!-- 


$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);  
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 50) {
        echo "Неподходящая длинна логина";
        exit();
    }else if(mb_strlen($password) < 5 || mb_strlen($password) > 50) {
        echo "Неподходящая длинна пароля";
        exit();
    };

    // $password = md5($password."qwerty");

    $mysql = new mysqli('localhost', 'root', 'root', 'realdy_db');
    $mysql->query("INSERT INTO `authorization_info` (`login`, `password`) VALUES ('$login', '$password')");

    $mysql->close();
    
    header('Location: /');
    exit(); -->
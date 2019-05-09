<?php
var_dump($_POST);
if (isset($_POST['name'])) $name = $_POST['name'];
if (isset($_POST['email'])) $email = $_POST['email'];

$host = "localhost";
$user = "root"; // Логин БД
$password = ""; // Пароль БД
$base = 'windbase'; // Имя БД
$table = "windtable"; // Имя Таблицы БД
$charset = "utf8"; // charset
$dsn = "mysql:host=$host;dbname=$base;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $password, $opt);
$sql = "INSERT INTO windtable (name,email) VALUES (:name,:email)";

$q = $pdo->prepare($sql);
$result = $pdo->query("INSERT INTO " . $table . " (name,email) VALUES ('$name','$email')");
?>
<?
$host = 'mysql-8.2';
$db = 'json2_db';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db";
$options = [
    PDO::ATTR_ERRMODE  => PDO::ERRMODE_EXCEPTION,
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC //можно раскоментировать что бы выбирал по умолчанию режим для fetch/fetchall
];
    
$pdo = new PDO($dsn, $user, $pass, $options);
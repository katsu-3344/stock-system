<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$host = $_ENV['DB_HOST'];
$db = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];

$dsn = "mysql:host={$host};dbname={$db};charset=utf8mb4";

try{
    $pdo = new PDO($dsn, $user, $pass);
        // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        echo "DB接続成功";
    
} catch(PDOException $e){
    exit("DB接続失敗: " . $e->getMessage());
}
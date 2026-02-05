<?php

$host = 'mysql';
$db = 'stock_db';
$user = 'stock_user';
$pass = 'stock_pass';

$dsn = "mysql:host={$host};dbname={$db};charset=utf8mb4";

try{
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    echo "MySQL接続成功";
    
}catch(PDOException $e){
    echo "接続失敗: " . $e->getMessage();
}
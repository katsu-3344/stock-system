<?php

require_once 'db.php';

echo "DB接続成功";

$stmt = $pdo->query("SELECT * FROM products");
$rows = $stmt->fetchAll();

echo "<pre>";
print_r($rows);

$sql = "INSERT INTO products(name, stock) VALUES ('テスト商品', 10)";
$pdo->exec($sql);

echo "INSERT 成功";
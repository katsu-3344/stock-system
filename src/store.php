<?php

require_once 'db.php';

$name = $_POST['name'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO products(name, quantity) values(:name, :quantity)";
$stmt = $pdo->prepare($sql);

$stmt->bindValue(':name', $name);
$stmt->bindvalue(':quantity', $quantity);

$stmt->execute();

echo "登録成功！！ <a href='create.php'>戻る</a>";
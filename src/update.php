<?php
// ob_start();
require_once 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];

$sql = "UPDATE products SET name = :name, quantity = :quantity WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':name', $name);
$stmt->bindValue(':quantity', $quantity);
$stmt->bindValue(':id', $id);
$stmt->execute();

header("Location: index.php");
exit;
// ob_end_flush();
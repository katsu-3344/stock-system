<?php
require_once 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();

header("Location: index.php");
exit;
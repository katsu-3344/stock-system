<?php
require_once 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":id", $id);
$stmt->execute();

$product = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>商品編集</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        商品名:
        <input type="text" name="name" value="<?=  $product['name'] ?>">
        在庫数:
        <input type="number" name="quantity" value="<?= $product['quantity'] ?>">
    
        <button type="submit">更新</button>
    </form>
</body>
</html>


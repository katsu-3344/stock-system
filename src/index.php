<?php
require_once 'db.php';

// 商品取得
$sql = "SELECT * FROM products ORDER BY id DESC";
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
</head>
<body>
    <h1>商品一覧</h1>

    <a href="create.php">商品登録</a>

    <table>
        <tr>
            <th>ID</th>
            <th>商品名</th>
            <th>在庫数</th>
        </tr>

        <?php foreach($products as $product): ?>
            <tr>
                <td><?= $product['id']; ?></td>
                <td><?= $product['name']; ?></td>
                <td><?= $product['quantity']; ?></td>
                <td><a href="edit.php?id=<?= $product['id']; ?>">編集</a></td>
            </tr>
        <?php endforeach; ?>    
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品登録</title>
</head>
<body>
    <h2>商品登録</h2>

    <form action="store.php" method="POST">
        <div>
            商品名
            <input type="text" name="name" required>
        </div>

        <div>
            数量
            <input type="number" name="quantity">
        </div>

        <button type="submit">登録</button>
    </form>
</body>
</html>
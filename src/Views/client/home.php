<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <h1>Danh sách 10 sản phẩm mới nhất</h1>

    <ul>
        <?php foreach ($latestProducts as $product): ?>
            <li>
                <h2><?= $product['p_name'] ?></h2>
                <img height="150px" src="<?= $product['p_img'] ?>" alt="<?= $product['p_name'] ?>">
                <p>Giá: <?= $product['p_price'] ?></p>
                <!-- Thêm thông tin chi tiết khác nếu cần -->
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>

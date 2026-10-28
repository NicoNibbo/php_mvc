<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>

<body>
    <h1>Products</h1>

    <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
            <h2><?= htmlspecialchars($product["name"]) ?></h2>
            <p><?= htmlspecialchars($product["description"]) ?></p>
        <?php endforeach; ?>

    <?php else: ?>
        <p>No products at the moment</p>
    <?php endif; ?>
</body>

</html>
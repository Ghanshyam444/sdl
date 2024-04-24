<?php
session_start();

$products = [
    ['id' => 1, 'name' => 'Product 1', 'price' => 10.99, 'description' => 'Description for Product 1'],
    ['id' => 2, 'name' => 'Product 2', 'price' => 20.99, 'description' => 'Description for Product 2'],
    ['id' => 3, 'name' => 'Product 3', 'price' => 30.99, 'description' => 'Description for Product 3']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
</head>
<body>
    <h2>Products</h2>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <h3><?php echo $product['name']; ?></h3>
                <p><?php echo $product['description']; ?></p>
                <p>Price: $<?php echo $product['price']; ?></p>
                <a href="add_to_cart.php?id=<?php echo $product['id']; ?>">Add to Cart</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

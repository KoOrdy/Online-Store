<?php
    include_once "back.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($store->getName()); ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            margin: 0;
            padding: 0;
        }

        .store {
            text-align: center;
            padding: 60px 20px;
            background-color: #1e1e1e;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.5);
            margin-bottom: 40px;
        }

        .store img {
            width: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 3px solid #333;
        }

        .store h1 {
            font-size: 48px;
            margin-bottom: 10px;
            color: #ffffff;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
        }

        .store p {
            font-size: 20px;
            color: #a9a9a9;
            max-width: 800px;
            margin: 0 auto;
        }

        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .product {
            background: #1e1e1e;
            border: 1px solid #333;
            border-radius: 12px;
            padding: 20px;
            margin: 15px;
            width: 280px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product:hover {
            transform: translateY(-10px);
            box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.6);
        }

        .product img {
            width: 100%;
            height: auto;
            border-bottom: 2px solid #333;
            margin-bottom: 15px;
            padding-bottom: 15px;
        }

        .product h3 {
            font-size: 24px;
            margin: 10px 0;
            color: #ffffff;
        }

        .product p {
            font-size: 18px;
            color: #a9a9a9;
        }

        .product .price {
            font-size: 24px;
            color: #ff5252;
            font-weight: bold;
        }

        .back-link {
            display: block;
            text-align: center;
            margin: 30px auto;
            font-size: 20px;
            color: #ffffff;
            background-color: #ff5252;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.5);
            width: 500px;
        }

        .back-link:hover {
            background-color: #ff3030;
        }

        .button {
            display: inline-block;
            background-color: #ff5252;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <div class="store">
        <img src="<?php echo ($store->getImage()); ?>" alt="<?php echo ($store->getName()); ?>">
        <h1><?php echo ($store->getName()); ?></h1>
        <p><?php echo ($store->getDescription()); ?></p>
    </div>

    <div class="products">
        <?php foreach ($store->getProducts() as $product): ?>
            <div class="product">
                <img src="<?php echo ($product->getImage()); ?>" alt="<?php echo ($product->getTitle()); ?>">
                <h3><?php echo ($product->getTitle()); ?></h3>
                <p class="price">$<?php echo ($product->getPrice()); ?></p>
                <button class="button">Buy</button>
            </div>
        <?php endforeach; ?>
    </div>

    <a href="index.php" class="back-link">Back to Store</a>
</body>
</html>

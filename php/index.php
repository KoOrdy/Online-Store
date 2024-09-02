<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Shop</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        .background {
            position: relative;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        #bg-video {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            background-size: cover;
        }

        h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .button-container {
            margin-top: 20px;
        }

        .shop-now {
            background-color: #C13C23;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .shop-now:hover {
            background-color: #A32B1B;
        }
    </style>
</head>
<body>
    <div class="background">
        <video autoplay muted loop id="bg-video">
            <source src="../img/ss.mp4" type="video/mp4">
        </video>
        <h1>Welcome to Nisr Store</h1>
        <div class="button-container">
            <a href="store.php" class="shop-now">Shop Now</a>
        </div>
    </div>
</body>
</html>

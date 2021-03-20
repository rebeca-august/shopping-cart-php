<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Shopping Cart</title>
</head>
<body>
    <header class="header">
        <span class="shopping-icon">🛒</span>
    </header>
    <?php
        $products = [
            [ "name" => "Sledgehammer", "price" => 125.75 ],
            [ "name" => "Axe", "price" => 190.50 ],
            [ "name" => "Bandsaw", "price" => 562.131 ],
            [ "name" => "Chisel", "price" => 12.9 ],
            [ "name" => "Hacksaw", "price" => 18.45 ],
        ];

        echo "<div class='container'>";
        foreach($products as $product){
            $name = $product["name"];
            $price = $product["price"];
            echo "<div class='item'>";
            echo "<p>Product: $name</p>";
            echo "<p>Price: $price</p>";
            echo "<button class='button'>ADD TO CART</button>";
            echo "</div>";
        }
        echo "</div>";
    ?>
</body>
</html>

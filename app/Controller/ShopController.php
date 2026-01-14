<?php

class ShopController
{

    public static function index($db)
    {
        $products = Product::all($db);
        $cart = $_SESSION['cart'];
        $total = 0;

        foreach ($products as $p) {
            if (isset($cart[$p['id']])) {
                $total += $p['price'] * $cart[$p['id']];
            }
        }

        require __DIR__ . '/../Views/shop.php';
        exit;
    }

    public static function add()
    {
        $id = $_POST['id'];
        $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
        header("Location: index.php");
        exit;
    }

    public static function clear()
    {
        $_SESSION['cart'] = [];
        header("Location: index.php");
        exit;
    }

    public static function buy()
    {
        $_SESSION['cart'] = [];
        echo "Bajarildi!<br>";
        echo "<a href='public/index.php'>Menu</a>";
        exit;
    }
}

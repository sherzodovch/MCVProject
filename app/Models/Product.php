<?php

class Product
{
    public static function all($db)
    {
        $res = $db->query("SELECT * FROM products");
        return $res->fetch_all(MYSQLI_ASSOC);
    }
}

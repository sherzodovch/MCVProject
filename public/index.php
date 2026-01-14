<?php
require __DIR__ . '/../app/Models/db.php';
require __DIR__ . '/../app/Models/Product.php';
require __DIR__ . '/../app/Controller/ShopController.php';
$controller = new ShopController($mysqli);

if (isset($_POST['add'])) {
    $controller->add();
}

if (isset($_POST['clear'])) {
    $controller->clear();
}

if (isset($_POST['buy'])) {
    $controller->buy();
}

ShopController::index($mysqli);

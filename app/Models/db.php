<?php

$mysqli = new mysqli("localhost", "root", "juraev", "mcv-market");
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

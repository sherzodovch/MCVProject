<?php
foreach ($products as $p) {
    echo $p["name"] . " - " . $p["price"] . " so'm";
?>
    <form method="post">
        <input type="hidden" name="id" value="<?= $p['id'] ?>">
        <button name="add">Qo'shish</button>
    </form>
    <br>
<?php
}

echo "Jami: " . $total . " so'm";
echo "<br><br>";
?>

<form method="post">
    <button name="buy">Sotib olish</button>
    <button name="clear">Ochirib yuborish</button>
</form>

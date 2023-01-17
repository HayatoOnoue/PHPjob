<?php
function getPrice($price, $quantity) {
    return $quantity * $price;
}

$fruits_price = ['りんご' => 150, 'みかん' => 50, 'もも' => 200];
$quantities = [2, 3, 15];

$i = 0;

foreach ($fruits_price as $key => $value) {
    $quantity = $quantities[$i];
    $totalPrice = getPrice($value, $quantity);
    echo "${key}は${totalPrice}円です。";
    echo '<br>';
    $i += 1;
}
?>
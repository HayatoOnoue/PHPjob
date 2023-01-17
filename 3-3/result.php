<?php
$number = $_GET["number"];

// 入力された数字の羅列から何番目をランダムに選ぶか決める。
$selectedIndex = mt_rand(0, strlen($number) - 1);

$selectedNumber = substr($number, $selectedIndex, 1);

if ($selectedNumber == '0') {
    $fotune = '凶';
} elseif (in_array($selectedNumber, ['1', '2', '3'])) {
    $fotune = '小吉';
} elseif (in_array($selectedNumber, ['4', '5', '6'])) {
    $fotune = '中吉';
} elseif (in_array($selectedNumber, ['7', '8'])) {
    $fotune = '吉';
} else {
    // この時$selectedNumber == 9
    $fotune = '大吉';
}

$today = date("Y/m/d", time());
echo "${today}の運勢は";
echo "<br>";
echo "選ばれた数字は${selectedNumber}";
echo "<br>";
echo $fotune;
?>
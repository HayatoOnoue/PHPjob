<?php
define("LAST_NUM", 100);
for ($i = 1; $i <= LAST_NUM; $i++) {
    if ($i % 3 === 0 && $i % 5 ===0) {
        echo "FizzBuzz!";
    } elseif ($i % 3 === 0) {
        echo "Fizz!";
    } elseif ($i % 5 === 0) {
        echo "Buzz!";
    } else {
        echo $i;
    }
    echo '<br>';
}
?>
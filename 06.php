<?php
include ('02.php');
if ($age >= 18 & $age <= 59) {
    echo "Вам еще работать и работать";
}
elseif($age > 59) {
    echo "Вам пора на пенсию";
}

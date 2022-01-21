<?php

if (isset($_GET['age'])) {
    $age = intval(trim(strip_tags($_GET['age'])));
    if ($age < 18 || $age > 100) {
        echo $age;
    }
    else {
        header('Location: index1.php');
    }
}

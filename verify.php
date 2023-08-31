<?php

namespace App;
require_once './vendor/autoload.php';

use App\Verificator;

if(isset($_POST['password'])) {
    $verificator = new Verificator($_POST['password']);
    $result = $verificator();
    $category = (string)"";

    if($result >= 25) $category = "Weak";
    else if($result >= 75) $category = "Normal";
    else if($result >= 100) $category = "Strong";
    else $category = "Very Weak";

    echo "<h1>Your password strength score is equal:".$result."</h1>";
    echo "<h2>".$category."</h2>";
}
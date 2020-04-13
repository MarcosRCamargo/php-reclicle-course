<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge =  function ($year){
    $age = date( "Y") - $year;
    return "<h5> Voce tem {$age} anos!</h5>";
};

echo $myAge(1988);

$priceBrl = function ($value){
    return number_format($value, 2, ",", ".");
};

echo  "<h3> O projeto custa R$"."{$priceBrl(2000)}. Vamos fechar?</h3>";

$myCart = [];

$myCart["totalPrice"] = 0;
$cardAdd = function($item, $qtd, $price) use (&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cardAdd("HTML5", 1, 250);
$cardAdd("JQuery", 2, 150);
$cardAdd("SQL", 1, 350);
echo "<pre>";
var_dump($myCart, $cardAdd);
echo "</pre>";
/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 400000;

function showDate($days)
{
    $saveDate = [];
    for ($day = 1; $day < $days; $day++) {
        $saveDate[] = date( "d/m/Y", strtotime("+{$day}days"));
    }
    return $saveDate;
}

echo "<div style='text-align: center'>";
foreach (showDate(2) as $data) {
    # code...
    echo "<small class='tag'>{$data}</small>" . PHP_EOL;
}
echo "</div>";

function generateDate($days){
    for ($day = 1; $day < $days; $day++) {
       yield date( "d/m/Y", strtotime("+{$day}days"));
    }
}

echo "<div style='text-align: center'>";
foreach (generateDate($iterator) as $data) {
    # code...
    echo "<small class='tag'>{$data}</small>" . PHP_EOL;
}
echo "</div>";
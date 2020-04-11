<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1,2,3);
$arrA = [1,2,3];
echo "<pre>" , var_dump($arrA) , "</pre>";
$arrayIndex = [
    "Brian",
    "Malcon",
    "Phill"
];

$arrayIndex []= "Cliff";
$arrayIndex []= "Angus";

echo "<pre>" , var_dump($arrayIndex) , "</pre>";
/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcon",
    "bass_guitar" => "Cliff"
];

$arrayAssoc["bass"] = "Phill";
$arrayAssoc["rock_band"] = "AC/DC";
echo "<pre>" , var_dump($arrayAssoc) , "</pre>";
/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = [ "Brian", "Mic"];
$angus = ["name" => "Angus", "instrument"=> "Guitar"];

$instruments = [
    $brian,
    $angus
];
echo "<pre>" , var_dump($instruments) , "</pre>";

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$acdc = [
    "band" => "AC/CD",
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcon",
    "bass_guitar" => "Cliff",
    "drums" => "Phill"
];

echo "<p> O vocal da banda AC/CD é  {$acdc['vocal']}, e junto com {$acdc ['solo_guitar']} fazem um otimo show de Rock!</p>";


$pear = [
    "band" => "Pear Jamp",
    "vocal" => "Eddie",
    "solo_guitar" => "Mike",
    "base_guitar" => "Stone",
    "bass_guitar" => "Jeff",
    "drums" => "Jeck"
];
$rockBands = [
    "acdc" => $acdc,
    "pear" => $pear
];

echo "<pre>" , var_dump($rockBands) , "</pre>";
foreach ( $acdc as $item){
    echo "<p> {$item}</p>";
}

foreach ( $acdc as $key => $value){
    echo "<p> {$value} is a {$key} of band!</p>";
}

foreach ($rockBands as $rockband){
    var_dump($rockband);
    $art = "<article><h1>%s</h1><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
    vprintf($art, $rockband);
}
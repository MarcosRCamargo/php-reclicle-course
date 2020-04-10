<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirstName = "Marcos"; // Seguir padrão segundo PSR 
$userLastName = "Camargo";


echo "<h1>{$userFirstName} {$userLastName}</h1>";

$user_first_name = $userFirstName;
$user_last_name = $userLastName;

echo "<h1>{$user_first_name} {$user_last_name}</h1>";

$userAge = 32;

echo "<p>{$userFirstName} {$userLastName} <span class='tag'> tem {$userAge} anos de idade.</span></p>";

$userMail = "<p>marcos@gmail.com</p>";

echo $userMail;

$company = "Wedev";
$$company = "Development";
echo "<h2>{$company} {$Wedev}</h2>";

$calcA = 10;
$calcB = 20;
$calcB = &$calcA;
$calcB = 50;
echo "<pre>",
var_dump([
    "a" => $calcA,
    "b" => $calcB
]) ,"</pre>";

 

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);


$true = true;
$false = false;

echo "<pre>", var_dump($true, $false) ,"</pre>";
$bestAge = ($userAge > 50);

echo "<pre>", var_dump($bestAge) ,"</pre>";

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;
echo "<pre>", var_dump($a, $b, $c, $d, $e) ,"</pre>";

if($a || $b || $c || $d || $e){
    var_dump(true);
}else{
    var_dump(false);
}
/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>Um Call User Function</h1></article>";
$codeClear = call_user_func("strip_tags", $code);
echo "<pre>", var_dump($code, $codeClear) ,"</pre>";

//Call Back em uma função

$codeMore = function($code){
    echo($code);
};
$codeMore("#BoraProgramar!");
/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Hello Word";
$array =  [ $string];
$object = new stdClass();
$object->hello =$string;
$null = null;
$int = 1235;
$float = 1.345;
echo "<pre>", var_dump(
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
) ,"</pre>";

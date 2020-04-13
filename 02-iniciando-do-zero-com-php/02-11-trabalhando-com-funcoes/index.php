<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);
require __DIR__ ."/functions.php";
echo "<pre>";
var_dump(functionName("Pear Jam", "AC/DC", "After Bridge"));
var_dump(functionName("Marcos", "Diego", "Eric"));
var_dump(opstionArgs("Marcos"));
var_dump(opstionArgs("Marcos", "Diego"));
var_dump(opstionArgs("Marcos", "Diego", "Eric"));
echo "</pre>";

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);
$weigth = 76;
$heigth = 1.63;
echo "<pre>";
echo calcImc();
echo "</pre>";

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

$pay = payTotal(200);
$pay = payTotal(200);
$pay = payTotal(200);
echo $pay;
/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

echo "<pre>";
var_dump(myTeam("Marcos", "Diego", "Eric"));
echo "</pre>";
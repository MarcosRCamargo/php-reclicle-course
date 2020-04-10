<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operadorA = 5;
$operators = [
    "a += 5" => ($operadorA +=5),
    "a -= 5" => ($operadorA -=5),
    "a *= 5" => ($operadorA *=5),
    "a /= 5" => ($operadorA /=5),
]; 
echo "<pre>", var_dump($operators) ,"</pre>";

$incrementA = 5;
$decrementB = 5;
 
$increments = [
    "pós-increment" => $incrementA++,
    "res-increment" => $incrementA,
    "pre-increment" => ++$incrementA,
    "pós-decrement" => $decrementB--,
    "res-decrement" => $decrementB,
    "pre-decrement" => --$decrementB,

];
echo "<pre>" , var_dump($increments) , "</pre>";


/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$relatedA = 5;
$relatedB = "5";
$relatedC = 10;

$relateds = [
    "a == b"    => ($relatedA == $relatedB),
    "a === b"   => ($relatedA === $relatedB),
    "a != b"    => ($relatedA != $relatedB),
    "a > c"     => ($relatedA > $relatedB),
    "a >= b"    => ($relatedA >= $relatedB),
    "a >= c"    => ($relatedA >= $relatedC),
    "a > c"    => ($relatedA > $relatedC),

];
echo "<pre>" , var_dump($relateds) , "</pre>";

/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$logicA = true;
$logicB = false;

$logics = [
    "a && b" => ($logicA && $logicB),
    "a || b" => ($logicA || $logicB),
    "a " => ($logicA),
    "! a" => (!$logicA),
    "! b" => (!$logicB),
  
];
echo "<pre>" , var_dump($logics) , "</pre>";
/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);
$calcA = 5;
$calcB = 10;

$calcs = [
    "A + B" => ($calcA + $calcB),
    "A - B" => ($calcA - $calcB),
    "A * B" => ($calcA * $calcB),
    "A / B" => ($calcA / $calcB),
    "A % B" => ($calcA % $calcB),
];

echo "<pre>" , var_dump($calcs) , "</pre>";

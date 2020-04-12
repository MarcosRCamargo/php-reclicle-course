<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);

$looping =1;
$while = [];

while ($looping <= 5) {
    # code...
    $while[] = $looping;
    $looping++;
}
echo "<pre>" , var_dump($while) , "</pre>";
$looping =5;
$while = [];
do{
    $while[] = $looping;
    $looping--;
}while($looping >=1);


echo "<pre>" , var_dump($while) , "</pre>";
/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);
for($i = 1; $i <= 10; $i++){
    echo "<pre>{$i}</pre>";
}

/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);

for($c = 1; $c <= 10; $c++){
   if($c % 2 == 1){
       continue;
   }
   if($c >= 10){
   break;
   }
   echo "<pre> Pulou + 2 :: {$c}</pre>";
}
/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);
$array = [];
for( $ar = 0; $ar <= 2; $ar++){
    $array[] = $ar;
}
echo "<pre>" , var_dump($array) , "</pre>";

foreach( $array  as $item){
    echo "<pre>" , var_dump($item) , "</pre>";
}
foreach( $array  as $key => $value){
    echo "<pre>". var_dump("{$key} = {$value}") .  "</pre>";
}

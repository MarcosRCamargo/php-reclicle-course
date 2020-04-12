<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);


$true = true;

if ($true) {
    echo "<pre>" , var_dump($true) , "</pre>";
}else{
    echo "<pre>" , var_dump($true) , "</pre>";
}

$age = 51;

if ($age < 20) {
    # code...
    echo "<p>" , var_dump("Bandas Coloridas") , "</p>";
} elseif ($age > 20 && $age < 50) {
    # code...
    echo "<p>" , var_dump("Otimas Bandas!") , "</p>";
} else {
    echo "<p>" , var_dump("Rock Raiz") , "</p>";
}

$hour = 3;

if ($hour >=5 && $hour < 23 ) {
    # code...
    if($hour < 7){
        echo "<p>" , var_dump("Antes de 7:pm Ouvindo Bob Marley") , "</p>";
    }else{
        echo "<p>" , var_dump("Depois de 7:pm Ouvindo After Bridge") , "</p>";
    }
} else {
    # code...
    echo "<p>" , var_dump("ZZZzzzzzzzzZZZZZZZZ") , "</p>";
}

/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);

$rock = "";

if(isset($rock)){
    echo "<p>" , var_dump("Rock Existe") , "</p>";
}else{
    echo "<p>" , var_dump("Sem Rock a gente Morre") , "</p>";
}

$rockAndRoll = "AC/CD";
if(!empty($rockAndRoll)){
    echo "<p>" , var_dump("Rock Existe  e toca {$rockAndRoll}!") , "</p>";
}else{
    echo "<p>" , var_dump("Sem Rock a gente Morre e não existimos") , "</p>";
}
/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);
$payment = "";

switch ($payment) {
    case 'canceled':
        echo "<p>" , var_dump("Pagamento Cancelado") , "</p>";
        break;
    case 'aproved':
            echo "<p>" , var_dump("Pagamento Aprovado") , "</p>";
            break;
    case 'pending':
        echo "<p>" , var_dump("Pagamento Pendente") , "</p>";
        break;
    case 'processing':
            echo "<p>" , var_dump("Pagamento Processando") , "</p>";
            break;    
        default:
            echo "<p>" , var_dump("Erro ao Processar Pagamento") , "</p>";
        break;
}



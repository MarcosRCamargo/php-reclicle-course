<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);
define("COURSE", "Full Stack PHP");
const AUTHOR = "Marcos";

$formation = true;

if ($formation){
    define("COURSE_TYPE", "Formação");
}else{
    define("COURSE_TYPE", "Curso");
}
echo "<p>COURSE_TYPE COURSE AUTHOR</p>";
echo "<p>{COURSE_TYPE} {COURSE} {AUTHOR}</p>";
echo "<p>O " .  AUTHOR ." estuda a ". COURSE_TYPE . " " . COURSE ."</p>";


class Config
{
    const USER = "root";
    const HOST = "localhsot";
}

echo "<p>", Config::HOST, "</p>";

echo "<pre>";
    var_dump(get_defined_constants(true)["user"]);
echo "</pre>";
/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);

echo "<pre>";
    var_dump([
        __LINE__,
        __DIR__,
        __FILE__
    ]);
echo "</pre>";
function fullStackPHP(){
    return __FUNCTION__;
}
echo "<pre>";
var_dump(fullStackPHP());
echo "</
pre>";
trait MyTrait{
    public $traitName = __TRAIT__;
}
class FsPhp{
    use MyTrait;
    public $className = __CLASS__;
}
echo "<pre>";
var_dump(new FsPhp());
echo "</pre>";
require __DIR__ . "/MyClass.php";
echo "<pre>";
var_dump(new \Source\MyClass());
var_dump(Source\MyClass::class);
echo "</pre>";

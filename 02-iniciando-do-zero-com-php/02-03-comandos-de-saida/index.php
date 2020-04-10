<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<p>Olá mundo", " ", "<span class='tag'>#BoraProgramar!</span>", " </p>";

$hello = "Hello  Word";
$code = "<span class='tag'> #BoraProgramar!</span>";

echo "<p>$hello</p>";
echo '<p>$code</p>';

$day = "dia";

echo "<p>Faltam 1 $day para o evento";
//Variavel protegida
echo "<p>Faltam 2 {$day}s para o evento";

echo "<h3>{$hello} {$code}</h3>";
// Usando concatenação

echo "<h3>" . $hello . " " . $hello . "</h3> concat";
?>

<p><?=$hello;?></p>
<?php
/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

print $hello;
print $code;

print "<h3>{$hello} {$code}</h3>";
/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);
 $array =[
    "company"   => "WEDEV - LTDA",
    "course"    => "Curso Full Stack PHP",
    "class"     => "Out put commands"
 ];

 echo $array;
 print $array;

 print_r($array);

 echo "<pre>", print_r($array, true) ,"</pre>";
/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello} {$code}";
$content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
 took a galley of type and scrambled it to make a type specimen book. It has survived not only five 
 centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was 
 popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
 and more recently with desktop publishing software like Aldus PageMaker including versions of 
 Lorem Ipsum.";
 printf($article, $title, $content);
 echo sprintf($article, $title, $content);



/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);
$company = "<article><h1>Escola %s</h1><p>Curso %s</p></article>";
vprintf($company, $array);
echo vsprintf($company, $array);

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);
echo "<pre>";
var_dump($array);
<?php
///// ATIVIDADE 1 /////

$a = 2;
$b = 4;
$c = 6;
$m = (($c+$b)/2)**(--$c);
$t = --$c**($b+$a);
$x = --$c + $b;
$y = $b++ + $a;
$z = $a - $b--;

echo ("a: " . $a . "\n");
echo ("b: " . $b . "\n");
echo ("c: " . $c . "\n");
echo ("m: " . $m . "\n");
echo ("t: " . $t . "\n");
echo ("x: " . $x . "\n");
echo ("y: " . $y . "\n");
echo ("z: " . $z . "\n");

$a2 = doubleval($a);
$b2 = doubleval($b);
$c2 = strval($c);

echo ("\n");

echo ("a (double): " . $a2 . "\n");
echo ("b (double): " . $b2 . "\n");
echo ("c (string): " . $c2);
?>

<?php
///// ATIVIDADE 2 /////

$raio = 5;
$pi = 3.14;
$perimetro = $pi * $raio;
$area = $pi * ($raio * $raio);

echo("raio do circulo -> " . $raio . "cm\n \n");
echo("perimetro do circulo -> π($pi) * raio($raio) -> $perimetro" . "cm \n \n");
echo("area do circulo -> π($pi) * raio²(25) -> $area" . "cm")
?>

<?php
///// ATIVIDADE 3 /////

$x = 6;
$y = 3;

echo("x = $x / ");
echo("y = $y \n \n");

echo("x + y = " . $x + $y . "\n");
echo("x - y = " . $x - $y . "\n");
echo("x * y = " . $x * $y . "\n");
echo("x / y = " . $x / $y . "\n");
echo("resto da divisão = " . $x %$y . "\n");
echo("x ^ y = " . pow($x, $y) . "\n");
echo("media = " . ($x + $y) / 2 . "\n");
echo ("raiz quadrada = " . sqrt($x + $y));
?>
<?php

$numeros = ["0","1","2","3","4","5","6","7","8","9"];
 //classificando o array

echo'<pre>';
print_r ($numeros);
echo $numeros[0];
echo"<br>";
echo $numeros[4];
echo"<br>";
echo $numeros[9];
echo"<hr>";
echo'<pre>';

echo'<pre>';
//Alternando valores
$numeros[0]= "100";
$numeros[4]= "500";
$numeros[9]= "1000";
print_r ($numeros);
echo $numeros[0];
echo"<br>";
echo $numeros[4];
echo"<br>";
echo $numeros[9];
echo'<pre>';

echo "<br>";



?>

<?php

$frutas = ["Banana","Maça","Morango","Uva"];


echo'<pre>';
print_r ($frutas);
echo $frutas[2];
echo"<hr>";
echo'<pre>';

echo'<pre>';
//Alternando valor 0 -> MORANGO P/ melancia
$frutas[2]= "Melancia";
print_r ($frutas);
echo'<pre>';

echo "<br>";

echo $frutas[2];

?>
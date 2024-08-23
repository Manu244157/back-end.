<?php
//Declarando variavel soma
$soma = 0;

for($num = 1; $num <= 100; $num++) { //Definindo sequencia de números de 1 a 100
    $resultado = $soma; 
    $soma+=$num; //Fazendo a soma
    echo " A soma é : $resultado + $num = $soma<br>";  //Exibindo no site o resultado da soma

}
?>

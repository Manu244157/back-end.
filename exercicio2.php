<?php

//Declarar variáveis

$salario= 2300;
$salario2=1800;
$bonus=0.2;
$bonus2=0.1;
$hrextra=10;
$hrextra2=5;

//Colocar informações que aparecem no site

echo "Seu primeiro salário é = $salario <br>";
echo "Seu segundo salário é = $salario2 <br>";

//Salário maior que 2000

if ($hrextra2 >= 5){ 
    $cal = $salario * $bonus;
    $soma= $cal + $salario;
        echo "O primeiro salário com bônus é = $soma <br>" ;
    
//Salário menor que 2000
    
}else($hrextra< 2000);
    $cal2= $salario2 * $bonus2;
    $soma2= $cal2 + $salario2;
    echo "Osegundo salario com bônus é= $soma2 <br>" ;




?>

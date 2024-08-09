<?php
//Variaveis

$compra='500';
$desconto= '10';
$vip='1';

//chama variaveis
echo"Sua compra foi de $compra <br/>";

//faz verdadeiro ou falso

if($compra>=500){
    echo"Cliente com desconto de $desconto %";

}else if ($vip=1){
    echo"Cliente com desconto de $desconto %";
}else{
    echo"Cliente sem desconto";
}

?>

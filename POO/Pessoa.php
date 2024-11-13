<?php

require_once('class_Pessoa.php');


$pessoa1 = new Pessoa();

$pessoa1->nome = "Paulo";
$pessoa1->idade = "36";
// $pessoa1->cpf = "678.569.789-92";
// $pessoa1->endereco ="Rua jose carlos,SP,109";
$pessoa1->apresentar();
echo"<hr>";
$pessoa1->caminhar();
echo"<hr>";
$pessoa1->falar();
echo"<hr>";
$pessoa1->simularComer();
echo"<hr>";
$pessoa1->simularDormir();
echo"<hr>";


?>


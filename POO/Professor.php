<?php

require_once('class_Professor.php');


$professor1 = new Professor();

$professor1->nome = "Marcos";
$professor1->disciplina = "Matemática";
// $professor1->cpf = "376.876.809-90";
// $professor1->salario = "3768,00";
$professor1->ensinar();
echo"<hr>";
$professor1->corrigirProva();
echo"<hr>";
$professor1->prepararAula();
echo"<hr>";
$professor1->simularfazerChamada();
echo"<hr>";
$professor1->simularcorrigirTarefa();
echo"<hr>";


?>
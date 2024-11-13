<?php

require_once('class_Coordenador.php');


$coordenador1 = new Coordenador();  

$coordenador1->nome = "Ana";
$coordenador1->departamento = "Administrativa";
// $coordenador1->cpf = "375-765-980-89";
// $coordenador1->salario = "5690,00";
$coordenador1->coordenadorTurmas();
echo"<hr>";
$coordenador1->planejarAulas();
echo"<hr>";
$coordenador1->auxiliarProfessores();
echo"<hr>";
$coordenador1->simulardefinirHorarios();
echo"<hr>";
$coordenador1->simularorganizarReunioes();
echo"<hr>";


?>
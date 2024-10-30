<?php


class Aluno{
 
public $nome = "Manu";
public $idade = null;
public $curso = 'química';


function exibirDadosAluno(){
    return "$this->nome está inscrita no curso de $this->curso";
}
function AlterCurso($alterarcurso){
    $this->curso = $alterarcurso;
}

}

$y = new Aluno();
echo $y -> exibirDadosAluno();
echo '<hr>';
$y->AlterCurso('Matemática');
echo $y->exibirDadosAluno();
echo '<hr>';


?>
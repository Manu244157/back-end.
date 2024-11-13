<?php

class Aluno{

//Variaveis
public $nome;
public $idade;
private $matricula;
private $turma;

//Metodo

public function estudar(){
    echo "$this->nome está estudando";
}

public function fazerProva(){
    echo "$this->nome está fazendo uma  prova";
}

public function assistirAula(){
    echo "$this->nome está assistindo aula de $this->turma";
}

private function entregarTrabalho(){
    echo "$this->nome está estregando trabalho";
}

private function faltarAula(){
    echo "$this->nome vai faltar aula ";
}

public function simularEntregarTrabalho(){
    echo $this->entregarTrabalho();
}

public function simularFaltarAula(){
    echo $this->faltarAula();
}


}
?>
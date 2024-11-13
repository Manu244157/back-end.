<?php

class Professor{

//Variaveis
public $nome;
public $disciplina;
private $cpf;
protected $salario;

//Metodo

public function ensinar(){
    echo "$this->nome está ensinando";
}

public function corrigirProva(){
    echo "$this->nome está corrigindo prova ";
}
public function prepararAula(){
    echo "$this->nome está preparando aula";
}

private function fazerChamada(){
    echo "$this->nome está fazendo chamada";
}

private function corrigirTarefa(){
    echo "$this->nome está corrigindo tarefa";
}

public function simularfazerChamada(){
    echo $this->fazerChamada();
}

public function simularcorrigirTarefa(){
    echo $this->corrigirTarefa();
}


}
?>
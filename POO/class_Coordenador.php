<?php

class Coordenador{

//Variaveis
public $nome;
public $departamento;
private $cpf;
protected $salario;

//Metodo

public function coordenadorTurmas(){
    echo "$this->nome está coordenando turmas";
}

public function planejarAulas(){
    echo "$this->nome está planejando aulas";
}
public function auxiliarProfessores(){
    echo "$this->nome está auxiliando professores";
}

private function definirHorarios(){
    echo "$this->nome está definindo horários de aula";
}

private function organizarReunioes(){
    echo "$this->nome está organizando Reuniões de Pais";
}

public function simulardefinirHorarios(){
    echo $this->definirHorarios();
}

public function simularorganizarReunioes(){
    echo $this->organizarReunioes();
}

}
?>
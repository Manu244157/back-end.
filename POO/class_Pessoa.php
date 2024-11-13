<?php

class Pessoa{

//Variaveis
public $nome;
public $idade;
protected $cpf;
protected $endereco;

//Metodo

public function apresentar(){
    echo "$this->nome está apresentando";
}

public function caminhar(){
    echo "$this->nome está caminhando ";
}
public function  falar(){
    echo "$this->nome está falando ";
}

private function Comer(){
    echo "$this->nome está comendo";
}

private function Dormir(){
    echo "$this->nome está dormir ";
}

public function simularComer(){
    echo $this->Comer();
}

public function simularDormir(){
    echo $this->Dormir();
}

}
?>
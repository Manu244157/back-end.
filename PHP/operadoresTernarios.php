<?php

/* $idade = "16" ;
$resultado = ($idade>=18)? "Maior de idade" :  "Menor de idade";
echo $resultado <br> ; 

$nome = "Manu" ; //Declarando variavel string
$mensagem = ($nome == "Manu")? "Olá, Manu" :  "Olá, VISITANTE";
echo $mensagem; //saída:Olá,Manu

$is_logged_in = true ;
$mensagem = $is_logged_in ? "Bem-vindo de volta" : "Por favor,faça login";
echo $mensagem*/


$corEscolhida = "roxo";

switch($corEscolhida) {
    case "vermelho":
        echo "Você escolheu a cor vermelha";
        break;

    case "azul":
        echo "Você escolheu a cor azul";
        break;

    case "roxo":
        echo "Você escolheu a cor roxo";
        break;

    default:
            echo "Cor não disponível";
            break;

}
?>
<?php

//Crie um array mult.
$usuario = [
[   "Nome" => "Emanuela Galindo",
    "Cidade" => "Cerquilho",
    "Estado" => "SP"],
[   "Nome" => "Ingrid Almeida",
    "Cidade" => "Niteroi",
    "Estado" => "RJ"],
[   "Nome" => "Pedro Henrique ",
    "Cidade" => "Floripa",
    "Estado" => "SC"],
[   "Nome" => "Emanuelly Brandi",
    "Cidade" => "Cerquilho",
    "Estado" => "SP"],
[   "Nome" => "Daniel Cardoso",
    "Cidade" => "Goianesia",
    "Estado" => "GO"],

];

//Define a variavel
$busca = "Emanuela Galindo";

//exibe a estrutura do array
echo'<pre>';
print_r($usuario);
echo'</pre>';

?>
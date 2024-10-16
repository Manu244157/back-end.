<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";

$titulo = $_POST['titulo'];

$genero = $_POST['genero'];

$descricao = $_POST['descricao'];

$texto = $titulo. '#' . $genero. '#'. $descricao;

echo $texto;

$arquivo = fopen('registro.txt', 'a');

fwrite($arquivo, '$texto');

fclose($arquivo);

?>
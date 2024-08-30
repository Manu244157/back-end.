<?php

//Criando array 

$cadastro = [];

//subarrays usuario
$cadastro ['usuario'] = ['João','Maria','Pedro'];

//subarrays senha
$cadastro ['senha'] = ['1234','abcd','5678'];


echo '<pre>';
print_r($cadastro);
echo '</pre>';

echo '<hr>';

//Alternado valores
$cadastro['usuario'][1] = ' Ana';

$cadastro['senha'][1] = ' efgh';

echo " O terceiro valor da array usuário agora é : ";
echo $cadastro['usuario'][1];

echo '<br>';

echo " O segundo valor da array senha agora é : ";
echo $cadastro['senha'][1];


echo '<pre>';
print_r($cadastro);
echo '</pre>';

?>
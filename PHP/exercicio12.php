<?php

//criando array cadastro
$cadastro = [] ;  

//criando array nome dentro de cadastro
$cadastro['nome'] = ['Emanuela','Ingrid','João','Leticia','Paulo'];

//criando array email dentro de cadastro
$cadastro['email'] = ['emanuela.luiz@yahoo.br','ingrid.Sepu@gmail.com',
'joao.silva@outlook.br','leticia.moreira@gmail.br','paulocomanche@yahoo.br'];

//Exibindo todo conteúdo
echo'<pre>';
print_r($cadastro);
echo'</pre>';
echo'<br>';

//Exibindo o 3° indice da subarray nome
echo $cadastro['nome'][2];
echo'<br>';

//exibindo o 4° indice da subarray email
echo $cadastro['email'][3];
echo'<br>';

echo'<hr>';

//Alterando o valor do 2° valor da subarray nome
$cadastro['nome'][1] = "Senai";

//Alterando o valor 0 da subarray email
$cadastro['email'][0] = "aluno@senai.br";

//Exibindo as alterações
echo"O 2° índice da array nome agora é: ";
echo$cadastro['nome'][1];

echo"<br>";

echo"O índice 0 da array email agora é: ";
echo$cadastro['email'][0];




?>

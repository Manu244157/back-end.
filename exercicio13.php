<?php

 

//criando array registro dentro de nome
$nome = array('Emanuela','Ingrid','João','Leticia','Paulo','Emanuelly','Daniel' ,'Pedro','Ricardo','Sangela');
$busca = "Sangela";

// fazendo busca
$indice = array_search("$busca",$nome);

//Verifica se o nome está presente no array e sua posição
if ($indice !== false){
echo" $busca foi encontrada. Na posição : " .  $indice;
}

else{
    echo" $busca não foi encontrada. ";
}


?>
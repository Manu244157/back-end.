<?php

//Cria um array chamado frutas
$frutas=array("Maça","Banana","Uva");


$indice = array_search("Banana",$frutas);

//Verifica se "Banana" está presente no array frutas
if ($indice !== false){
echo"Banana foi encontrada na posição." .  $indice;
}

else{
    echo"Banana não foi encontrada na posição. ";
}

?>
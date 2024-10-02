<?php

//Cria um array chamado frutas
$frutas=array("Maça","Banana","Uva");

$nome_fruta = "Laranja";

//Verifica se "Banana" está presente no array frutas
if (in_array($nome_fruta,$frutas)){
echo" $nome_fruta está na lista de frutas.";
}

else{
    echo" $nome_fruta não está na lista de frutas.";
}

?>
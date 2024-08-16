<?php
//"Titulo"
$tabu="Tabuada";
echo "$tabu <br>";

//Declarando a função
function vezes($num){
    //Chamando o for para a função
    for($i = 1; $i <= 10; $i++) {
        $resultado = $num * $i;
        //coloquei este echo para mostrar tal texto no site
        echo "$num x $i = $resultado<br>";
    }
}
//declarando o valor da tabuada
$num = 2;
vezes($num); 

?>

<?php
//saída numeros
for($i = 1; $i <= 10; $i++) 
{
    //se é ímpar ou par
    echo $i . " "; 
    echo ($i % 2 !=0) ? '(ímpar)' : '(par)' ;
    echo " - " ; 
 
    //classificando se é baixo,medio ou alto
    switch(true) {
        case ($i >= 1 && $i <= 3):
            echo "baixo";
            break;

        case ($i >= 4 && $i <= 7):
            echo "médio";
            break;

        case ($i >= 8 && $i <= 10):
            echo "alto";
            break;
        default:
        echo 'Numero nao reconhecido'; 
    
    }
    
echo"<br>";
}
        
?>
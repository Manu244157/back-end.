<?php
$nota1 = '8';
$nota2 = '7 ';
$nota3 = '9' ;

echo "A primeira nota é = $nota1 <br>";
echo "A segunda nota é = $nota2 <br>";
echo "A terceira nota é = $nota3 <br>";

$media = ($nota1 + $nota2 + $nota3)/3;

echo "Sua média é:  $media <br>";
if ($media <7 ){;
    echo "Você foi reprovado";
}else{
    echo "Você foi aprovado";
}

?>
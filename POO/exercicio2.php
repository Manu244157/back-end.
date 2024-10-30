<?php


class Livro{
 
public $titulo = "Trono de vidro";
public $autor = 'Sarah j maas';
public $anoPublicacao = '2013';


function exibirDetalhes(){
    return " O livro $this->titulo escrito por $this->autor  foi publicado em $this->anoPublicacao";
}
function AlterAnoPublicacao($alterarAnoPubli){
    $this->anoPublicacao = $alterarAnoPubli;
}

}

$y = new Livro();
echo $y -> exibirDetalhes();
echo '<hr>';
$y->AlterAnoPublicacao('2017');
echo $y->exibirDetalhes();
echo '<hr>';


?>
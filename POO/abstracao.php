<?php

//Modelo -> Entidade
class Funcionario{
 
//Atributos - Cracteristicas
public $nome = "Manu";
public $telefone = null;
public $numfilhos = 2;

//Metódo -> Ações 
    function resumirCadFunc(){
    //Esse é o resumo do cadastro do funcionario
    return "$this->nome possui $this->numfilhos filho(s)";

    }
    function modificarNumfilhos($Filhos){
    //Afeta um atributo do objeto
    $this->numfilhos = $Filhos;

    }
    function modificarNome($AlterarNome){
    $this->nome = $AlterarNome;
    }

}
//Objeto -> Identidade
$y = new Funcionario();
echo $y -> resumirCadFunc();
echo '<hr>';
$y->modificarNumfilhos(3);
echo $y->resumirCadFunc();
echo '<hr>';

$x = new Funcionario();
$x->modificarNome('Sarah');
echo $x->resumirCadFunc();
echo '<hr>';

?>
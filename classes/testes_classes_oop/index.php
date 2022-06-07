<?php
class Humano {

// propriedades e métodos

}
class JogadorFutebol {

// propriedades e métodos

}

class FiguraGeometrica{

// propriedades e métodos

    public $largura, $altura; ##Atributos - propriedades
    public $x; ##Atributos - propriedades
    public $y; ##Atributos - propriedades

    function novaArea($a, $b){
        
        return $a * $b;
    
    }

}


class Carros {

// propriedades
    public $modelo;
    public $cor;

    //Métodos

    function set_modelo($modelo){

        $this->modelo = $modelo;
    }

    function get_modelo(){

        $this->modelo;
    }

}

$uno = new Carros;


$uno->set_modelo("uno");

var_dump($uno);
<?php



class Carro{
    //propriedades
    public $modelo;
    public $cor;

    //Métodos
    function set_modelo($modelo){
        $this->modelo = $modelo;

    }

    function get_modelo(){
        return $this->modelo;
    }

  
}

    $carro1 = new Carro();

    var_dump($uno);

    $carro1->set_modelo("Uno");

    var_dump($uno);


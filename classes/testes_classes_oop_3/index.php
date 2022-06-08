<?php



class Carro {
    //propriedades
    public $modelo;
    public $ano;

    function __construct($modelo, int $ano=2022){

        $this->modelo = $modelo;
        $this->cor = $ano;
        echo "Objeto Criado com sucesso";

    }
    function get_modelo(){
        return $this->modelo;

    }
    
}

$auto =  new Carro("Uno",2022);

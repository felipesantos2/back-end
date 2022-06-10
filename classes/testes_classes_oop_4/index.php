<?php


class Socio {

    #membros e métodos

    public $nome;
    public $idade = 45;

    #criar objetos a partir de um molde 

    
    
}


$meusocio = new Socio();

$meusocio->nome = 'João';
//$meusocio->idade = 35;

echo 'O meu primeiro socio chama-se '. $meusocio->nome . ' e tem ' . $meusocio->idade . ' anos.'; 

echo '<p>Fim do script</p>';
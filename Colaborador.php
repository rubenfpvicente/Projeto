<?php

include_once 'Morada.php';

class Colaborador {
    public string $nome;
    public string $morada;
    public int $contacto;
    public int $nif;

    public function __construct($nome, $morada, $contacto, $nif) {
        $this -> nome = $nome;
        
    }
    
}
<?php

include_once 'Morada.php';

class Colaborador {
    public string $nome;
    public array $morada;
    public int $contacto;
    public int $nif;

    public function __construct($nome, $rua, $porta, $codPostal, $cidade, $pais, $contacto, $nif) {
        $this -> nome = $nome;
        $this -> morada[] = new Morada($rua, $porta, $codPostal, $cidade, $pais);
        $this -> contacto = $contacto;
        $this -> nif = $nif;
    }
    
}
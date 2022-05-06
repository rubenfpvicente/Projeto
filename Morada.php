<?php

include_once 'Colaborador.php';

class Morada{
    public string $rua;
    public int $porta;
    public int $codPostal;
    public string $cidade;
    public string $pais;

    public function __construct($rua, $porta, $codPostal, $cidade, $pais) {
        $this->rua = $rua;
        $this->porta = $porta;
        $this->codPostal = $codPostal;
        $this->cidade = $cidade;
        $this->pais = $pais;
    }
}
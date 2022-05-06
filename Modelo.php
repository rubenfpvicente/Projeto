<?php

include_once 'Colaborador.php';
include_once 'Morada.php';
include_once 'Agente.php'
class Modelo{
    public string $sexo;
    public string $nacionalidade;
    public float $altura;
    public float $medida1;
    public float $medida2;
    public float $medida3;
    public string $agente;

    public function __construct($sexo, $nacionalidade, $altura, $medida1, $medida2, $medida3, $agente) {
        $this->sexo = $sexo;
        $this->nacionalidade = $nacionalidade;
        $this->altura = $altura;
        $this->medida1 = $medida1;
        $this->medida2 = $medida2;
        $this->medida3 = $medida3;
        $this->agente = $agente;
    }
}
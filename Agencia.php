<?php

include_once 'Colaborador.php';
include_once 'Morada.php';
include_once 'Agente.php';
include_once 'Modelo.php';

class Agencia{
    public array $modelos = [];
    public array $fotografos = [];
    public array $agentes = [];

    public function __construct($modelos, $fotografos, $agentes){
        $this->modelos[] =+ $modelos;
        $this->fotografos[] =+ $fotografos;
        $this->agentes[] =+ $agentes;
    }
}
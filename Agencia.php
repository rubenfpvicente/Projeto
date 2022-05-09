<?php

include_once 'Morada.php';

class Agencia{
    public $modelos;
    public $fotografos;
    public $agentes;
    public $colaboradores;

    public function __construct()
    {
        $this->modelos = [];
        $this->fotografos = [];
        $this->agentes = [];
        $this->colaboradores = [];
    }

    public function AdicionarModelo(Modelo $modelo) 
    {
        $this->modelos[] = $modelo;
    }
    
    public function exportar()
    {
        $ficheiro = fopen("modelos.txt", "w") or die("Não foi possivel criar o ficheiro");
        // modelos
    
        foreach($this->modelos as $modelo) {
            fwrite($ficheiro, $modelo->exportar() . "\n");
        }
        fclose($ficheiro);
    }

    public function importar()
    {
        $modelos = fopen("modelos.txt", "r") or die("Unable to open file!");
        while (!feof($modelos)) {
            $m = new Modelo('', null, '', '', '','','','','','');
            $this->modelos[] = $m->importar(fgets($modelos));
        }

    }
}
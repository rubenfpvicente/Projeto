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
        $modelo->codigo=count($this->modelos)-1;
    }

    public function AdicionarAgente(Agente $agente) 
    {
        $this->agentes[] = $agente;
        $agente->codigo=count($this->agentes)-1;
    }

    public function AdicionarFotografo(Fotografo $fotografo) 
    {
        $this->fotografos[] = $fotografo;
        $fotografo->codigo=count($this->fotografos)-1;
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
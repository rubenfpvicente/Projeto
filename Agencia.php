<?php

require_once 'Morada.php';
require_once 'Modelo.php';
require_once 'Agente.php';
require_once 'Fotografo.php';

class Agencia{
    public $modelos;
    public $fotografos;
    public $agentes;
    public $trabalhos;

    public function __construct()
    {
        $this->modelos = [];
        $this->fotografos = [];
        $this->agentes = [];
        $this->moradas = [];
        $this->trabalhos = [];
    }

    public function AdicionarModelo(Modelo $modelo) 
    {
        $this->modelos[] = $modelo;
        $modelo->codigo=count($this->modelos)-1;
    }

    public function AdicionarMorada(Morada $morada) 
    {
        $this->moradas[] = $morada;
        $morada->codigo=count($this->moradas);-1;
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
        // modelos
        $ficheiro = fopen("modelos.txt", "w") or die("Não foi possivel criar o ficheiro");
    
        foreach($this->modelos as $modelo) {
            fwrite($ficheiro, $modelo->exportar() . "\n");
        }
        fclose($ficheiro);

        // agentes
        $ficheiro = fopen("agentes.txt", "w") or die("Não foi possivel criar o ficheiro");
    
        foreach($this->agentes as $agente) {
            fwrite($ficheiro, $agente->exportar() . "\n");
        }
        fclose($ficheiro);
    }

    public function importar()
    {
        $modelos = fopen("modelos.txt", "r") or die("Unable to open file!");
        while (!feof($modelos)) {
            $m = new Modelo('', 0 , '', '', '','','','','','');
            $this->modelos[] = $m->importar(fgets($modelos));
        }

    }
}
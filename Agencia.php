<?php

require_once 'Morada.php';
require_once 'Agente.php';
require_once 'Modelo.php';

class Agencia
{
    public $modelos;
    public $agentes;
    public $fotografos;
    public $moradas;
    public $trabalhos;

    public function __construct()
    {
        $this->modelos = [];
        $this->agentes = [];
        $this->moradas = [];
        $this->fotografos = [];
        $this->trabalhos = [];        
    }

    public function adicionarModelo(Modelo $modelo)
    {
        $this->modelos[] = $modelo;
        $modelo->codigo = count($this->modelos);
    }

    public function adicionarMorada(Morada $morada)
    {
        $this->moradas[] = $morada;
        $morada->codigo = count($this->moradas);
    }

    public function adicionarAgente(Agente $agente)
    {
        $this->agentes[] = $agente;
        $agente->codigo = count($this->agentes);
    }

    public function adicionarFotografo(Fotografo $fotografo)
    {
        $this->fotografos[] = $fotografo;
        $fotografo->codigo = count($this->fotografos);
    }

    public function adicionarTrabalho(Trabalho $trabalho)
    {
        $this->trabalhos[] = $trabalho;
        $trabalho->codTrabalho = count($this->trabalhos);
    }

    public function exportar()
    {
            $ficheiro = fopen("modelos.txt", "w") or die("Não foi possível criar o ficheiro!");
            // modelos
            foreach($this->modelos as $modelo) {
                fwrite($ficheiro, $modelo->exportar() . "\n");
            }
            fclose($ficheiro);

            // a mesma coisa para os moradas
            $ficheiro = fopen("moradas.txt", "w") or die("Não foi possível criar o ficheiro!");
            // modelos
            foreach($this->moradas as $morada) {
                fwrite($ficheiro, $morada->exportar() . "\n");
            }
            fclose($ficheiro);

            // para os agentes
            $ficheiro = fopen("agentes.txt", "w") or die("Não foi possível criar o ficheiro!");
            // modelos
            foreach($this->agentes as $agente) {
                fwrite($ficheiro, $agente->exportar() . "\n");
            }
            fclose($ficheiro);

            // para os fotografos
            $ficheiro = fopen("fotografos.txt", "w") or die("Não foi possível criar o ficheiro!");
            // modelos
            foreach($this->fotografos as $fotografo) {
                fwrite($ficheiro, $fotografo->exportar() . "\n");
            }
            fclose($ficheiro);

            // para os trabalhos
            $ficheiro = fopen("trabalhos.txt", "w") or die("Não foi possível criar o ficheiro!");
            // modelos
            foreach($this->trabalhos as $trabalho) {
                fwrite($ficheiro, $trabalho->exportar() . "\n");
            }
            fclose($ficheiro);
    }

    public function importar()
    {
        $modelos = fopen("modelos.txt", "r") or die("Unable to open file!");
        while (!feof($modelos)) {
            $m = new Modelo('', 0, '', '', '','',0,0,0,0);
            $this->modelos[] = $m->importar(fgets($modelos));
        }

        $moradas = fopen("moradas.txt", "r") or die("Unable to open file!");
        while (!feof($moradas)) {
            $m = new Morada('', '', '', '', '');
            $this->moradas[] = $m->importar(fgets($moradas));
        }

        $agentes = fopen("agentes.txt", "r") or die("Unable to open file!");
        while (!feof($agentes)) {
            $a = new Agente('',0,'','','');
            $this->agentes[] = $a->importar(fgets($agentes));
        }

        $fotografos = fopen("fotografos.txt", "r") or die("Unable to open file!");
        while (!feof($fotografos)) {
            $f = new Fotografo('',0,'','','');
            $this->fotografos[] = $f->importar(fgets($fotografos));
        }

        $trabalhos = fopen("trabalhos.txt", "r") or die("Unable to open file!");
        while (!feof($trabalhos)) {
            $t = new Trabalho(0,'','',0,0);
            $this->trabalhos[] = $t->importar(fgets($trabalhos));
        }
    }

}
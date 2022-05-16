<?php

class Trabalho {
    public $codTrabalho;
    public $codAgente;
    public $dataInicio;
    public $dataFim;
    public $codModelo;
    public $codFotografo;

    public function __construct(int $codAgente, string $dataInicio, string $dataFim, int $codModelo, int $codFotografo) 
    {
        $this->codAgente = $codAgente;
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        $this->codModelo = $codModelo;
        $this->codFotografo = $codFotografo;
    }

    public function exportar(): string
    {
        return $this->codTrabalho . ";" . $this->codAgente . ";" . $this->dataInicio . ";" . $this->dataFim 
         .";" . $this->codModelo . ";" . $this->codFotografo;
    }

    public function importar(string $trabalho): void
    {
        $elementos = explode(";", $trabalho);
        $this->codTrabalho = $elementos[0];
        $this->codAgente = $elementos[1];
        $this->dataInicio = $elementos[2];
        $this->dataFim = $elementos[3];
        $this->codModelo = $elementos[4];
        $this->codFotografo = $elementos[5];
    }

    
}
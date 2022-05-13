<?php

class Agente extends Colaborador
{
    public $dataInicio;
    public $dataFim;

    public function __construct(string $nome, string $codMorada, string $contacto, string $nif, string $dataInicio, string $dataFim){
        parent::__construct($nome, $codMorada, $contacto, $nif);
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
    }

    public function exportar(): string {
        return $this->codigo . ";" . $this->nome . ";" . $this->codMorada . ";" . $this->contacto . ";" . $this->nif . ";" . $this->dataInicio . ";" . $this->dataFim;
    }

    public function importar(string $agente) {
        $elementos = explode(".", $agente);
            $this->nome = $elementos[0];
            $this->codMorada = $elementos[1];
            $this->contacto = $elementos[2];
            $this->nif = $elementos[3];
            $this->dataInicio = $elementos[4];
            $this->dataFim = $elementos[5];
    }
}
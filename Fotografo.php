<?php

class Fotografo extends Colaborador 
{
    public function __construct(string $nome, int $codMorada, string $contacto, string $nif) {
        parent::__construct($nome, $codMorada, $contacto, $nif);
    }

    public function exportar(): string
    {
        return $this->codigo . ";" . $this->nome . ";" . $this->codMorada 
         .";" . $this->contacto . ";" . $this->nif;
    }

    public function importar(string $fotografo): void
    {
        $elementos = explode(";", $fotografo);
        $this->codigo = $elementos[0];
        $this->nome = $elementos[1];
        $this->codMorada = $elementos[2];
        $this->contacto = $elementos[3];
        $this->nif = $elementos[4];
    }
}
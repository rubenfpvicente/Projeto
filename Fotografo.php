<?php

class Fotografo extends Colaborador 
{
    /**
     * data de inicio do fotografo
     *
     * @var string
     */
    public $dataInicio;
    public function __construct(string $nome, string $rua, string $porta, string $codigoPostal, 
    string $cidade, string $pais, string $contacto, string $nif, string $dataInicio) {
        parent::__construct($nome, $rua, $porta, $codigoPostal, $cidade, $pais, $contacto, $nif);
        $this->dataInicio = $dataInicio;
    }

    public function exportar(): string
    {
        return $this->codigo . ";" . $this->nome . ";" . $this->rua . ";" . $this->porta . ";" . $this->codigoPostal . ";" . $this->cidade 
        . ";" . $this->pais . ";" . $this->contacto . ";" . $this->nif . $this->dataInicio;
    }

    public function importar(string $fotografo): void
    {
        $elementos = explode(";", $fotografo);
        $this->codigo = $elementos[0];
        $this->nome = $elementos[1];
        $this->rua = $elementos[2];
        $this->porta = $elementos[3];
        $this->codigoPostal = $elementos[4];
        $this->cidade = $elementos[5];
        $this->porta = $elementos[6];
        $this->contacto = $elementos[7];
        $this->nif = $elementos[8];
        $this->dataInicio = $elementos[9];
    }

    /**
     * Get data de inicio do fotografo
     *
     * @return  string
     */ 
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * Set data de inicio do fotografo
     *
     * @param  string  $dataInicio  data de inicio do fotografo
     *
     * @return  self
     */ 
    public function setDataInicio(string $dataInicio)
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }
}
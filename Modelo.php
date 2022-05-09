<?php

class Modelo extends Colaborador 
{
    public $sexo;
    public $nacionalidade;
    public $altura;
    public $medida1;
    public $medida2;
    public $medida3;

    public function __construct(string $nome, Morada $morada, string $contacto, string $nif, string $sexo, string $nacionalidade, float $altura, float $medida1, float $medida2, float $medida3)
        {
            parent::__construct($nome, $morada, $contacto, $nif);
    
            $this->sexo = $sexo;
            $this->nacionalidade = $nacionalidade;
            $this->altura = $altura;
            $this->medida1 = $medida1;
            $this->medida1 = $medida2;
            $this->medida1 = $medida3;
        }

    public function exportar(): string
        {
        return $this->codigo . ";" . $this->nome . ";" . $this->morada->exportar() . ";" ;
        }
    
        public function importar(string $modelo): void
        {
            $elementos = explode(".", $modelo);
            $this->nome = $elementos[0];
            $this->morada = $elementos[1];
            $this->contacto = $elementos[2];
            $this->nif = $elementos[3];
            $this->sexo = $elementos[4];
            $this->nacionalidade = $elementos[5];
            $this->medida1 = $elementos[6];
            $this->medida2 = $elementos[7];
            $this->medida3 = $elementos[8];

        }
}
<?php

require_once 'Colaborador.php';
require_once 'Agencia.php';

class Modelo extends Colaborador
{
    public $sexo;
    public $nacionalidade;
    public $altura;
    public $medida1;
    public $medida2;
    public $medida3;
    public $codAgente;


    public function __construct(string $nome, string $rua, string $porta, string $codigoPostal, 
    string $cidade, string $pais, string $contacto, string $nif, string $sexo, string $nacionalidade, float $altura, 
        float $medida1, float $medida2, float $medida3, int $codAgente = 0)
    {
        parent::__construct($nome, $rua, $porta, $codigoPostal, $cidade, $pais, $contacto, $nif);

        $this->sexo = $sexo;
        $this->nacionalidade = $nacionalidade;
        $this->altura = $altura;
        $this->medida1 = $medida1;
        $this->medida1 = $medida2;
        $this->medida1 = $medida3;
        $this->codAgente = $codAgente;
    }

    public function exportar(): string
    {
        return $this->codigo . ";" . $this->nome . ";" . $this->rua . ";" . $this->porta . ";" . $this->codigoPostal . ";" . $this->cidade 
         . ";" . $this->pais . ";" . $this->contacto . ";" . $this->nif . ";" . $this->sexo . ";"
         . $this->nacionalidade . ";" . $this->altura . ";" . $this->medida1 . ";" . $this->medida2.
         ";" . $this->medida3 . ";" . $this->codAgente;
    }

    public function importar(string $modelo): void
    {
        $elementos = explode(";", $modelo);
        $this->codigo = $elementos[0];
        $this->nome = $elementos[1];
        $this->rua = $elementos[2];
        $this->porta = $elementos[3];
        $this->codigoPostal = $elementos[4];
        $this->cidade = $elementos[5];
        $this->pais = $elementos[6];
        $this->contacto = $elementos[7];
        $this->nif = $elementos[8];
        $this->sexo = $elementos[9];
        $this->nacionalidade = $elementos[10];
        $this->altura = $elementos[11];
        $this->medida1 = $elementos[12];
        $this->medida2 = $elementos[13];
        $this->medida3 = $elementos[14];
        $this->codAgente = $elementos[15];
    }

}

?>
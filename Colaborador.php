<?php

class Colaborador
{
    public $codigo;
    public $nome;
    public $rua;
    public $porta;
    public $codigoPostal;
    public $cidade;
    public $pais;
    public $contacto;
    public $nif;

    public function __construct(string $nome, string $rua, string $porta, string $codigoPostal, 
    string $cidade, string $pais, string $contacto, string $nif)
    {
        $this->nome = $nome;
        $this->rua = $rua;
        $this->porta = $porta;
        $this->codigoPostal = $codigoPostal;
        $this->cidade = $cidade;
        $this->pais = $pais;
        $this->contacto = $contacto;
        $this->nif = $nif;
    }

    // o resto das coisas

}
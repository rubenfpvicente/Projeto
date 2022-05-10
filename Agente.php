<?php

class Agente extends Colaborador
{
    public $inicioAtividade;
    public $representacoes;

    public function __construct(string $inicioAtividade, string $representacoes){
        parent::__construct($nome, $morada, $contacto, $nif);
        $this->inicioAtividade = $inicioAtividade;
        $this->representacoes = $representacoes;
    }
}
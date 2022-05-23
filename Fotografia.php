<?php

class Fotografia {
    
    public $codigo;
    public $codAgente;
    public $codModelo;
    public $codFotografo;

    public function __construct(int $codAgente,int $codModelo,int $codFotografo) {
        $this->codAgente = $codAgente;
        $this->codModelo = $codModelo;
        $this->codFotografo = $codFotografo;
    }


}
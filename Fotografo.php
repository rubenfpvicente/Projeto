<?php

class Fotografo extends Colaborador 
{
    public function __construct(string $nome, int $codMorada, string $contacto, string $nif) {
        parent::__construct($nome, $codMorada, $contacto, $nif);
    }
}
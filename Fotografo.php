<?php

class Fotografo extends Colaborador 
{
    public function __construct() {
        parent::__construct($nome, $morada, $contacto, $nif);
    }
}
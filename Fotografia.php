<?php

class Fotografia {
    
    /**
     * codigo da fotografia
     *
     * @var int
     */
    public $codigo;
    /**
     * codigo do modelo da fotografia
     *
     * @var int
     */
    public $codModelo;
    /**
     * codigo do fotografo da fotografia
     *
     * @var int
     */
    public $codFotografo;

    public function __construct(int $codModelo,int $codFotografo) {
        $this->codModelo = $codModelo;
        $this->codFotografo = $codFotografo;
    }

    public function exportar(): string
    {
        return $this->codigo . ";" . $this->codModelo . ";" . $this->codFotografo;
    }

    public function importar(string $fotografia): void
    {
        $elementos = explode(";", $fotografia);
        $this->codigo = $elementos[0];
        $this->codModelo = $elementos[1];
        $this->codFotografo = $elementos[2];
    }


    /**
     * Get codigo da fotografia
     *
     * @return  int
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set codigo da fotografia
     *
     * @param  int  $codigo  codigo da fotografia
     *
     * @return  self
     */ 
    public function setCodigo(int $codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo do modelo da fotografia
     *
     * @return  int
     */ 
    public function getCodModelo()
    {
        return $this->codModelo;
    }

    /**
     * Set codigo do modelo da fotografia
     *
     * @param  int  $codModelo  codigo do modelo da fotografia
     *
     * @return  self
     */ 
    public function setCodModelo(int $codModelo)
    {
        $this->codModelo = $codModelo;

        return $this;
    }

    /**
     * Get codigo do fotografo da fotografia
     *
     * @return  int
     */ 
    public function getCodFotografo()
    {
        return $this->codFotografo;
    }

    /**
     * Set codigo do fotografo da fotografia
     *
     * @param  int  $codFotografo  codigo do fotografo da fotografia
     *
     * @return  self
     */ 
    public function setCodFotografo(int $codFotografo)
    {
        $this->codFotografo = $codFotografo;

        return $this;
    }
}
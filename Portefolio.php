<?php

class Portefolio{
    /**
     * codigo do portefolio
     *
     * @var int
     */
    public $codigo;
    /**
     * codigo do agente do portefolio
     *
     * @var int
     */
    public $codAgente;
    /**
     * data de inicio do portefolio
     *
     * @var string
     */
    public $dataInicio;
    /**
     * data do fim do portefolio
     *
     * @var string
     */
    public $dataFim;
    /**
     * codigo do modelo do portefolio
     *
     * @var int
     */
    public $codModelo;
    /**
     * codigo do fotografo do portefolio
     *
     * @var int
     */
    public $codFotografo;
    /**
     * fotografias do portefolio
     *
     * @var array
     */
    public $fotografias;

    public function __construct(int $codAgente, string $dataInicio, string $dataFim, int $codModelo, int $codFotografo) 
    {
        $this->codAgente = $codAgente;
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        $this->codModelo = $codModelo;
        $this->codFotografo = $codFotografo;
        $this->fotografias = [];
    }

    public function exportar(): string
    {
        return $this->codigo . ";" . $this->codAgente . ";" . $this->dataInicio . ";" . $this->dataFim 
         .";" . $this->codModelo . ";" . $this->codFotografo . ";" . $this->fotografias;
    }

    public function importar(string $portefolio): void
    {
        $elementos = explode(";", $portefolio);
        $this->codigo = $elementos[0];
        $this->codAgente = $elementos[1];
        $this->dataInicio = $elementos[2];
        $this->dataFim = $elementos[3];
        $this->codModelo = $elementos[4];
        $this->codFotografo = $elementos[5];
        $this->fotografias = $elementos[6];
    }

    public function adicionarFotografia (Fotografia $fotografia) 
    {
        $this->fotografias[] = $fotografia;
        $fotografia->codFotografia = count($this->fotografias);
    }

    /**
     * Get codigo do portefolio
     *
     * @return  int
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set codigo do portefolio
     *
     * @param  int  $codigo  codigo do portefolio
     *
     * @return  self
     */ 
    public function setCodigo(int $codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo do agente do portefolio
     *
     * @return  int
     */ 
    public function getCodAgente()
    {
        return $this->codAgente;
    }

    /**
     * Set codigo do agente do portefolio
     *
     * @param  int  $codAgente  codigo do agente do portefolio
     *
     * @return  self
     */ 
    public function setCodAgente(int $codAgente)
    {
        $this->codAgente = $codAgente;

        return $this;
    }

    /**
     * Get data de inicio do portefolio
     *
     * @return  string
     */ 
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * Set data de inicio do portefolio
     *
     * @param  string  $dataInicio  data de inicio do portefolio
     *
     * @return  self
     */ 
    public function setDataInicio(string $dataInicio)
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    /**
     * Get data do fim do portefolio
     *
     * @return  string
     */ 
    public function getDataFim()
    {
        return $this->dataFim;
    }

    /**
     * Set data do fim do portefolio
     *
     * @param  string  $dataFim  data do fim do portefolio
     *
     * @return  self
     */ 
    public function setDataFim(string $dataFim)
    {
        $this->dataFim = $dataFim;

        return $this;
    }

    /**
     * Get codigo do modelo do portefolio
     *
     * @return  int
     */ 
    public function getCodModelo()
    {
        return $this->codModelo;
    }

    /**
     * Set codigo do modelo do portefolio
     *
     * @param  int  $codModelo  codigo do modelo do portefolio
     *
     * @return  self
     */ 
    public function setCodModelo(int $codModelo)
    {
        $this->codModelo = $codModelo;

        return $this;
    }

    /**
     * Get codigo do fotografo do portefolio
     *
     * @return  int
     */ 
    public function getCodFotografo()
    {
        return $this->codFotografo;
    }

    /**
     * Set codigo do fotografo do portefolio
     *
     * @param  int  $codFotografo  codigo do fotografo do portefolio
     *
     * @return  self
     */ 
    public function setCodFotografo(int $codFotografo)
    {
        $this->codFotografo = $codFotografo;

        return $this;
    }

    /**
     * Get fotografias do portefolio
     *
     * @return  array
     */ 
    public function getFotografias()
    {
        return $this->fotografias;
    }

    /**
     * Set fotografias do portefolio
     *
     * @param  array  $fotografias  fotografias do portefolio
     *
     * @return  self
     */ 
    public function setFotografias(array $fotografias)
    {
        $this->fotografias = $fotografias;

        return $this;
    }
} 
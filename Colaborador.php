<?php

class Colaborador
{
    /**
     * codigo do colaborador
     *
     * @var int
     */
    public $codigo;
    /**
     * nome do colaborador
     *
     * @var string
     */
    public $nome;
    /**
     * rua do colaborador
     *
     * @var string
     */
    public $rua;
    /**
     * porta do colaborador
     *
     * @var string
     */
    public $porta;
    /**
     * codigo postal do colaborador
     *
     * @var string
     */
    public $codigoPostal;
    /**
     * cidade do colaborador
     *
     * @var string
     */
    public $cidade;
    /**
     * pais do colaborador
     *
     * @var string
     */
    public $pais;
    /**
     * contacto do colaborador
     *
     * @var string
     */
    public $contacto;
    /**
     * nif do colaborador
     *
     * @var string
     */
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


    /**
     * Get codigo do colaborador
     *
     * @return  int
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set codigo do colaborador
     *
     * @param  int  $codigo  codigo do colaborador
     *
     * @return  self
     */ 
    public function setCodigo(int $codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get nome do colaborador
     *
     * @return  string
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set nome do colaborador
     *
     * @param  string  $nome  nome do colaborador
     *
     * @return  self
     */ 
    public function setNome(string $nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get rua do colaborador
     *
     * @return  string
     */ 
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Set rua do colaborador
     *
     * @param  string  $rua  rua do colaborador
     *
     * @return  self
     */ 
    public function setRua(string $rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Get porta do colaborador
     *
     * @return  string
     */ 
    public function getPorta()
    {
        return $this->porta;
    }

    /**
     * Set porta do colaborador
     *
     * @param  string  $porta  porta do colaborador
     *
     * @return  self
     */ 
    public function setPorta(string $porta)
    {
        $this->porta = $porta;

        return $this;
    }

    /**
     * Get codigo postal do colaborador
     *
     * @return  string
     */ 
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set codigo postal do colaborador
     *
     * @param  string  $codigoPostal  codigo postal do colaborador
     *
     * @return  self
     */ 
    public function setCodigoPostal(string $codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get cidade do colaborador
     *
     * @return  string
     */ 
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set cidade do colaborador
     *
     * @param  string  $cidade  cidade do colaborador
     *
     * @return  self
     */ 
    public function setCidade(string $cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get pais do colaborador
     *
     * @return  string
     */ 
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set pais do colaborador
     *
     * @param  string  $pais  pais do colaborador
     *
     * @return  self
     */ 
    public function setPais(string $pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get contacto do colaborador
     *
     * @return  string
     */ 
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set contacto do colaborador
     *
     * @param  string  $contacto  contacto do colaborador
     *
     * @return  self
     */ 
    public function setContacto(string $contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get nif do colaborador
     *
     * @return  string
     */ 
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set nif do colaborador
     *
     * @param  string  $nif  nif do colaborador
     *
     * @return  self
     */ 
    public function setNif(string $nif)
    {
        $this->nif = $nif;

        return $this;
    }
}
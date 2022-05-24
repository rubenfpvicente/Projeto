<?php

require_once 'Colaborador.php';
require_once 'Agencia.php';

class Modelo extends Colaborador
{
    /**
     * sexo do modelo
     *
     * @var string
     */
    public $sexo;
    /**
     * nacionalidade do modelo
     *
     * @var string
     */
    public $nacionalidade;
    /**
     * altura do modelo
     *
     * @var float
     */
    public $altura;
    /**
     * medida1 do modelo
     *
     * @var float
     */
    public $medida1;
    /**
     * medida2 do modelo
     *
     * @var float
     */
    public $medida2;
    /**
     * medida3 do modelo
     *
     * @var float
     */
    public $medida3;
    /**
     * codigo do agente do modelo
     *
     * @var int
     */
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


    /**
     * Get sexo do modelo
     *
     * @return  string
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set sexo do modelo
     *
     * @param  string  $sexo  sexo do modelo
     *
     * @return  self
     */ 
    public function setSexo(string $sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get nacionalidade do modelo
     *
     * @return  string
     */ 
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set nacionalidade do modelo
     *
     * @param  string  $nacionalidade  nacionalidade do modelo
     *
     * @return  self
     */ 
    public function setNacionalidade(string $nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    /**
     * Get altura do modelo
     *
     * @return  float
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set altura do modelo
     *
     * @param  float  $altura  altura do modelo
     *
     * @return  self
     */ 
    public function setAltura(float $altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get medida1 do modelo
     *
     * @return  float
     */ 
    public function getMedida1()
    {
        return $this->medida1;
    }

    /**
     * Set medida1 do modelo
     *
     * @param  float  $medida1  medida1 do modelo
     *
     * @return  self
     */ 
    public function setMedida1(float $medida1)
    {
        $this->medida1 = $medida1;

        return $this;
    }

    /**
     * Get medida2 do modelo
     *
     * @return  float
     */ 
    public function getMedida2()
    {
        return $this->medida2;
    }

    /**
     * Set medida2 do modelo
     *
     * @param  float  $medida2  medida2 do modelo
     *
     * @return  self
     */ 
    public function setMedida2(float $medida2)
    {
        $this->medida2 = $medida2;

        return $this;
    }

    /**
     * Get medida3 do modelo
     *
     * @return  float
     */ 
    public function getMedida3()
    {
        return $this->medida3;
    }

    /**
     * Set medida3 do modelo
     *
     * @param  float  $medida3  medida3 do modelo
     *
     * @return  self
     */ 
    public function setMedida3(float $medida3)
    {
        $this->medida3 = $medida3;

        return $this;
    }

    /**
     * Get codigo do agente do modelo
     *
     * @return  int
     */ 
    public function getCodAgente()
    {
        return $this->codAgente;
    }

    /**
     * Set codigo do agente do modelo
     *
     * @param  int  $codAgente  codigo do agente do modelo
     *
     * @return  self
     */ 
    public function setCodAgente(int $codAgente)
    {
        $this->codAgente = $codAgente;

        return $this;
    }
}

?>
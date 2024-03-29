<?php


class Agencia
{
    /**
     * Lista dos modelos da agência
     *
     * @var array
     */
    public $modelos;
    /**
     * Lista dos agentes da agência
     *
     * @var array
     */
    public $agentes;
    /**
     * Lista dos fotografos da agência
     *
     * @var array
     */
    public $fotografos;
    /**
     * Lista dos portefolios da agência
     *
     * @var array
     */
    public $portefolios;
    /**
     * Lista das fotografias da agência
     *
     * @var array
     */
    public $fotografias;

    public function __construct()
    {
        $this->modelos = [];
        $this->agentes = [];
        $this->fotografos = [];
        $this->portefolios = [];   
        $this->fotografias = [];     
    }

    public function adicionarModelo(Modelo $modelo)
    {
        $this->modelos[] = $modelo;
        $modelo->codigo = count($this->modelos);
    }

    public function adicionarAgente(Agente $agente)
    {
        $this->agentes[] = $agente;
        $agente->codigo = count($this->agentes);
    }

    public function adicionarFotografo(Fotografo $fotografo)
    {
        $this->fotografos[] = $fotografo;
        $fotografo->codigo = count($this->fotografos);
    }

    public function adicionarPortefolio(Portefolio $portefolio)
    {
        $this->portefolios[] = $portefolio;
        $portefolio->codPortefolio = count($this->portefolios);
    }

    public function adicionarFotografia (Fotografia $fotografia) 
    {
        $this->fotografias[] = $fotografia;
        $fotografia->codFotografia = count($this->fotografias);
    }

    public function exportar()
    {
            $ficheiro = fopen("modelos.txt", "w") or die("Não foi possível criar o ficheiro!");
            // modelos
            foreach($this->modelos as $modelo) {
                fwrite($ficheiro, $modelo->exportar() . "\n");
            }
            fclose($ficheiro);

            // para os agentes
            $ficheiro = fopen("agentes.txt", "w") or die("Não foi possível criar o ficheiro!");
            // modelos
            foreach($this->agentes as $agente) {
                fwrite($ficheiro, $agente->exportar() . "\n");
            }
            fclose($ficheiro);

            // para os fotografos
            $ficheiro = fopen("fotografos.txt", "w") or die("Não foi possível criar o ficheiro!");
            // modelos
            foreach($this->fotografos as $fotografo) {
                fwrite($ficheiro, $fotografo->exportar() . "\n");
            }
            fclose($ficheiro);

            // para os portefolios
            $ficheiro = fopen("portefolios.txt", "w") or die("Não foi possível criar o ficheiro!");
            // modelos
            foreach($this->portefolios as $portefolio) {
                fwrite($ficheiro, $portefolio->exportar() . "\n");
            }
            fclose($ficheiro);

            // para as fotografias
            $ficheiro = fopen("fotografias.txt", "w") or die("Não foi possível criar o ficheiro!");
            // modelos
            foreach($this->fotografias as $fotografia) {
                fwrite($ficheiro, $fotografia->exportar() . "\n");
            }
            fclose($ficheiro);
    }

    public function importar()
    {
        $modelos = fopen("modelos.txt", "r") or die("Unable to open file!");
        while (!feof($modelos)) {
            $m = new Modelo('',0,'','','','',0,0,0,0);
            $this->modelos[] = $m->importar(fgets($modelos));
        }

        $agentes = fopen("agentes.txt", "r") or die("Unable to open file!");
        while (!feof($agentes)) {
            $a = new Agente('','','','','','','','','');
            $this->agentes[] = $a->importar(fgets($agentes));
        }

        $fotografos = fopen("fotografos.txt", "r") or die("Unable to open file!");
        while (!feof($fotografos)) {
            $f = new Fotografo('','','','','','','','','');
            $this->fotografos[] = $f->importar(fgets($fotografos));
        }

        $portefolios = fopen("portefolios.txt", "r") or die("Unable to open file!");
        while (!feof($portefolios)) {
            $p = new Portefolio(0,"","",0,0);
            $this->portefolios[] = $p->importar(fgets($portefolios));
        }

        $fotografias = fopen("fotografias.txt", "r") or die("Unable to open file!");
        while (!feof($fotografias)) {
            $ft = new Fotografia(0,0);
            $this->fotografias[] = $ft->importar(fgets($fotografias));
        }
    }


    /**
     * Get lista dos modelos da agência
     *
     * @return  array
     */ 
    public function getModelos()
    {
        return $this->modelos;
    }

    /**
     * Set lista dos modelos da agência
     *
     * @param  array  $modelos  Lista dos modelos da agência
     *
     * @return  self
     */ 
    public function setModelos(array $modelos)
    {
        $this->modelos = $modelos;

        return $this;
    }

    /**
     * Get lista dos agentes da agência
     *
     * @return  array
     */ 
    public function getAgentes()
    {
        return $this->agentes;
    }

    /**
     * Set lista dos agentes da agência
     *
     * @param  array  $agentes  Lista dos agentes da agência
     *
     * @return  self
     */ 
    public function setAgentes(array $agentes)
    {
        $this->agentes = $agentes;

        return $this;
    }

    /**
     * Get lista dos fotografos da agência
     *
     * @return  array
     */ 
    public function getFotografos()
    {
        return $this->fotografos;
    }

    /**
     * Set lista dos fotografos da agência
     *
     * @param  array  $fotografos  Lista dos fotografos da agência
     *
     * @return  self
     */ 
    public function setFotografos(array $fotografos)
    {
        $this->fotografos = $fotografos;

        return $this;
    }

    /**
     * Get lista dos portefolios da agência
     *
     * @return  array
     */ 
    public function getPortefolios()
    {
        return $this->portefolios;
    }

    /**
     * Set lista dos portefolios da agência
     *
     * @param  array  $portefolios  Lista dos portefolios da agência
     *
     * @return  self
     */ 
    public function setPortefolios(array $portefolios)
    {
        $this->portefolios = $portefolios;

        return $this;
    }

    /**
     * Get lista das fotografias da agência
     *
     * @return  array
     */ 
    public function getFotografias()
    {
        return $this->fotografias;
    }

    /**
     * Set lista das fotografias da agência
     *
     * @param  array  $fotografias  Lista das fotografias da agência
     *
     * @return  self
     */ 
    public function setFotografias(array $fotografias)
    {
        $this->fotografias = $fotografias;

        return $this;
    }
}
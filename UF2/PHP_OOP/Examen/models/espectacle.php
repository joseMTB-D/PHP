<?php
require_once "config/database.php";

class espectacle{
    public $idespectaculo;
    public $espectaculo;
    public $artista;
    public $fecha;
    public $votos;
    public $foto;
    public $sinopsis;

    function __construct(){

    }
    /**
     * Get the value of idespectacle
     */ 
    public function getIdespectacle()
    {
        return $this->idespectacle;
    }

    /**
     * Set the value of idespectacle
     *
     * @return  self
     */ 
    public function setIdespectacle($idespectacle)
    {
        $this->idespectacle = $idespectacle;

        return $this;
    }

    /**
     * Get the value of espectaculo
     */ 
    public function getEspectaculo()
    {
        return $this->espectaculo;
    }

    /**
     * Set the value of espectaculo
     *
     * @return  self
     */ 
    public function setEspectaculo($espectaculo)
    {
        $this->espectaculo = $espectaculo;

        return $this;
    }

    /**
     * Get the value of artista
     */ 
    public function getArtista()
    {
        return $this->artista;
    }

    /**
     * Set the value of artista
     *
     * @return  self
     */ 
    public function setArtista($artista)
    {
        $this->artista = $artista;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of votos
     */ 
    public function getVotos()
    {
        return $this->votos;
    }

    /**
     * Set the value of votos
     *
     * @return  self
     */ 
    public function setVotos($votos)
    {
        $this->votos = $votos;

        return $this;
    }

    /**
     * Get the value of foto
     */ 
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set the value of foto
     *
     * @return  self
     */ 
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get the value of sinopsis
     */ 
    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    /**
     * Set the value of sinopsis
     *
     * @return  self
     */ 
    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;

        return $this;
    }
    public function Espectaclesdefaul(){
        $con=database::conectar();
        $esp="SELECT espectaculo,foto,sinopsis FROM `espectaculo` ";
        $resultat=$con->query($esp);
       return $resultat;
    }
    
}

?>
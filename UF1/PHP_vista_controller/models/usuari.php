<?php
require_once "config/database.php";

 class usuari{
    public $dni;
    public $nom;
    public $telefon;
    public $correu;
    public $contraseña;
    public $rol;
    public $db;
    
    
    

function __construct(/*$dni,$nom,$telefon,$correu,$contraseña,$rol*/){
    /*$this->$dni;
    $this->$nom;
    $this->$telefon;
    $this->$correu;
    $this->$contraseña;
    $this->$rol;*/

}
public function insertar(){
    $con=database::conectar();
    $sql="INSERT INTO `usuari`(`DNI`, `nom`, `telefon`, `correu`,`contraseña`,`Rol`) VALUES ('{$this->getDni()}','{$this->getNom()}',{$this->getTelefon()},'{$this->getCorreu()}','{$this->getContraseña()}','{$this->getRol()}')";
    $con->query($sql) or ($con->error);
    
}


    /**
     * Get the value of dni
     */ 
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */ 
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of telefon
     */ 
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set the value of telefon
     *
     * @return  self
     */ 
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get the value of correu
     */ 
    public function getCorreu()
    {
        return $this->correu;
    }

    /**
     * Set the value of correu
     *
     * @return  self
     */ 
    public function setCorreu($correu)
    {
        $this->correu = $correu;

        return $this;
    }

    /**
     * Get the value of contraseña
     */ 
    public function getContraseña()
    {
        return $this->contraseña;
    }

    /**
     * Set the value of contraseña
     *
     * @return  self
     */ 
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;

        return $this;
    }

    /**
     * Get the value of rol
     */ 
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     *
     * @return  self
     */ 
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }
 }

?>
<?php
require_once "config/database.php";

 class llibre{
    public $isbn;
    public $titol;
    public $categoria;
    public $preu;
    public $editorial;
    public $autor;

    
function __construct(/*$isbn,$titol,$categoria,$preu,$editorial,$autor*/){
   /* $this->$isbn;
    $this->$titol;
    $this->$categoria;
    $this->$preu;
    $this->$editorial;
    $this->$autor;*/

}


    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of editorial
     */ 
    public function getEditorial()
    {
        return $this->editorial;
    }

    /**
     * Set the value of editorial
     *
     * @return  self
     */ 
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;

        return $this;
    }

    /**
     * Get the value of preu
     */ 
    public function getPreu()
    {
        return $this->preu;
    }

    /**
     * Set the value of preu
     *
     * @return  self
     */ 
    public function setPreu($preu)
    {
        $this->preu = $preu;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of titol
     */ 
    public function getTitol()
    {
        return $this->titol;
    }

    /**
     * Set the value of titol
     *
     * @return  self
     */ 
    public function setTitol($titol)
    {
        $this->titol = $titol;

        return $this;
    }

    /**
     * Get the value of isbn
     */ 
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */ 
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }
    public function insertar(){
        $con=database::conectar();
           $afegir="INSERT INTO `llibre`(`Isbn`, `titol`, `categoria`, `preu`, `editorial`, `autor`) VALUES ('{$this->getIsbn()}','{$this->getTitol()}','{$this->getCategoria()}',{$this->getPreu()},'{$this->getEditorial()}','{$this->getAutor()}')";
           $con->query($afegir);
         
          // copy($_FILES['foto']['tmp_name'],base_url."assets/img/". $this->getTitol() . ".jpg");
          
    }
    public function eliminar(){
        $con=database::conectar();
        $borrar="DELETE FROM `llibre` WHERE `Isbn`={$this->getIsbn()}";
        $con->query($borrar);
        header("Location: http://localhost/PHP_vista_controller/llibre/mostrarAdmin");
        }
    
   
}

?>
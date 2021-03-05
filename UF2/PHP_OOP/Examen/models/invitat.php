<?php
require_once "config/database.php";

 class invitat{
     public $idinvitado;
     public $invitado;
     public $espectaculo_idespectaculo;

     /**
      * Get the value of idinvitado
      */ 
     public function getIdinvitado()
     {
          return $this->idinvitado;
     }

     /**
      * Set the value of idinvitado
      *
      * @return  self
      */ 
     public function setIdinvitado($idinvitado)
     {
          $this->idinvitado = $idinvitado;

          return $this;
     }

     /**
      * Get the value of invitado
      */ 
     public function getInvitado()
     {
          return $this->invitado;
     }

     /**
      * Set the value of invitado
      *
      * @return  self
      */ 
     public function setInvitado($invitado)
     {
          $this->invitado = $invitado;

          return $this;
     }

     /**
      * Get the value of espectaculo_idespectaculo
      */ 
     public function getEspectaculo_idespectaculo()
     {
          return $this->espectaculo_idespectaculo;
     }

     /**
      * Set the value of espectaculo_idespectaculo
      *
      * @return  self
      */ 
     public function setEspectaculo_idespectaculo($espectaculo_idespectaculo)
     {
          $this->espectaculo_idespectaculo = $espectaculo_idespectaculo;

          return $this;
     }
     public function insertar(){
        $con=database::conectar();
           $afegir="INSERT INTO `invitado`(`idinvitado`, `invitado`, `espectaculo_idespectaculo`) VALUES ('{$this->getIdinvitado()}','{$this-> getInvitado()}','{$this->getEspectaculo_idespectaculo()}')";
         
           $con->query($afegir);
           

    }
    
 }

?>
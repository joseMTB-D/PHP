<?php
require_once "models/espectacle.php";

class espectacleController{

    public function mostrar(){
        require_once "views/mespectacles.php";
    }
    /*public function Espectaclesdefaul(){
        $con=database::conectar();
        $esp="SELECT espectaculo,foto,sinopsis FROM `espectaculo` ";
        $resultat=$con->query($esp);
       return $resultat;
    }*/
    
    
}
?>
<?php
require_once "models/prestec.php";
class prestecController{
    public function MostrarPrestecAdmin(){
        $con=database::conectar();
        $prestecs="SELECT `codi`,`ISBN`,`DNI`,`data_prestec`,`data_retorn`,`retornat`FROM prestec";
        $resultat=$con->query($prestecs);
       return $resultat;
    }
    public function mostrarPrestecsUsuari(){
        $con=database::conectar();
        $prestecs="SELECT codi,ISBN,DNI,data_prestec,data_retorn,retornat FROM prestec WHERE DNI ="."'".$_SESSION["id"]."'"."  ";
        $resultat=$con->query($prestecs);
       return $resultat;
    }
    public function mostrar(){
        require_once "views/prestec/mostrarPrestec.php";
    }
    public function mostrarMeusUser(){
        require_once "views/prestec/mostrarPrestecUsuari.php";
    }

    public function mostrarAfegir(){
        require_once "views/prestec/afegirPrestec.php";
    }
    public function mostrarAfegirUsuari(){
        require_once "views/prestec/afegirPrestecUsuario.php";
    }
    public function afegir(){
        if(isset($_POST)){
           $llibre=$_POST['isbn'];
           $usuari=$_POST['dni'];
           $prestec= new prestec();
           $prestec->setIsbn($llibre);
           $prestec->setDni($usuari);
           $hoy = time() + (30 * 24 * 60 * 60);
           $mesSiguiente= date('Y-m-d', $hoy);
           $prestec->setData_retorn($mesSiguiente);
           $prestec->insertar();
           
        }
    }
    public function actualizar(){
        $codi=$_GET["codi"];
        $req=("UPDATE `prestec` SET retornat='1' WHERE codi= '$codi'");
        echo $req;
        $con=database::conectar();
       $con->query($req);
       require_once "views/prestec/mostrarPrestec.php";

    }
}


?>
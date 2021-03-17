<?php
require_once "models/llibre.php";

class llibreController{
    public function index(){
        echo "Pagina index llibre";
    }
    public function mostrarAdmin(){
        require_once "views/llibre/llistallibres.php";
    }
    public function mostrarUser(){
        require_once "views/llibre/TopLlibre.php";
    }
    public function LlibredefaultAdmin(){
        $con=database::conectar();
        $llibres="SELECT titol,autor,Isbn FROM `llibre` ORDER BY titol ";
        $resultat=$con->query($llibres);
       return $resultat;
    }
    public function LlibredefaultUser(){
        $con=database::conectar();
        $llibres="SELECT titol,autor FROM `llibre` ORDER BY titol ";
        $resultat=$con->query($llibres);
       return $resultat;
    }
    public function mostrarAfegir(){
        require_once "views/llibre/afegirllibre.php";
    }
    public function afegir(){
        if(isset($_POST)){
           $isbn=$_POST['isbn'];
           $titol=$_POST['titol'];
           $categoria=$_POST['categoria'];
           $preu=$_POST['preu'];
           $editorial=$_POST['editorial'];
           $autor=$_POST['autor'];
           $llibre= new llibre();
           $llibre->setIsbn($isbn);
           $llibre->setTitol($titol);
           $llibre->setCategoria($categoria);
           $llibre->setPreu($preu);
           $llibre->setEditorial($editorial);
           $llibre->setAutor($autor);
           $llibre->insertar();
           copy($_FILES['foto']['tmp_name'],"assets/img/". $llibre->getTitol() . ".jpg");

        }
    }
    public function eliminar(){
        $llibre= new llibre();
        $codi=$_GET["codi"];
        echo "isbn: ".$codi;
        $llibre->setIsbn($codi);
        $llibre->eliminar();

    }
    
   
}
?>
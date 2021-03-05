<?php
require_once "models/llibre.php";

class llibreController{
    public function index(){
        echo "Pagina index llibre";
    }
    public function mostrar(){
        require_once "views/llibre/TopLlibre.php";
    }
    public function Llibredefault(){
        $con=database::conectar();
        $llibres="SELECT titol,autor FROM `llibre` ORDER BY titol desc LIMIT 3";
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
           
        }
    }
    
   
}
?>
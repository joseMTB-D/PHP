<?php
require_once "models/usuari.php";
class usuariController{
    public function index(){
        echo "Pagina index usuari";
    }

    public function mostrarregistrar(){
        require_once "views/usuari/registre.php";

    }
    public function registrar(){
       if(isset($_POST)){
        $dni=$_POST["dni"];
        $nom=$_POST["nom"];
        $telefon=$_POST["telefon"];
        $correu=$_POST["correo"];
        $contraseña=$_POST["password"];
        $rol="admin";
        echo "DNI: ". $dni;
        $usuari=new usuari();
        $usuari->setDni($dni);
        $usuari->setNom($nom);
        $usuari->setTelefon($telefon);
        $usuari->setCorreu($correu);
        $usuari->setContraseña($contraseña);
        $usuari->setRol("Admin");
        $usuari->insertar();
       }
       
    }
   public function mostrarlogin(){
    require_once "views/usuari/login.php";

   }
    public function login(){

    }

}


?>
<?php
require_once "models/usuari.php";

class usuariController
{
    public function index()
    {
        echo "Pagina index usuari";
    }

    public function mostrarregistrar()
    {
        require_once "views/usuari/registre.php";
    }
    public function registrar()
    {
        if (isset($_POST)) {
            $dni = $_POST["dni"];
            $nom = $_POST["nom"];
            $telefon = $_POST["telefon"];
            $correu = $_POST["correo"];
            $contraseña = $_POST["password"];
            $usuari = new usuari();
            $usuari->setDni($dni);
            $usuari->setNom($nom);
            $usuari->setTelefon($telefon);
            $usuari->setCorreu($correu);
            $usuari->setContraseña($contraseña);
            $usuari->setRol("usuari");
            $usuari->insertar();
        }
    }
    public function MostrarUsuariAdmin()
    {
        $con = database::conectar();
        $usuari = "SELECT `DNI`,`nom`,`telefon`,`correu`,`contraseña`,`Rol`FROM usuari";
        $resultat = $con->query($usuari);
        return $resultat;
    }
    public function mostrar()
    {
        require_once "views/usuari/mostrarUsuari.php";
    }
    public function mostrarlogin()
    {
        require_once "views/usuari/login.php";
    }
    public function login()
    {
        if (isset($_POST)) {
            $mail = $_POST["correo"];
            $contra = $_POST["password"];
            $req = ("SELECT `DNI`,`contraseña`,`Rol` FROM `usuari` WHERE correu LIKE '$mail'");
            $con = database::conectar();
            $resultado = $con->query($req);
            $final_result = $resultado->fetch_array();
            $contraseña = $final_result["contraseña"];
            $rol = $final_result["Rol"];
            $id=$final_result["DNI"];


            if ($contra == $contraseña) {
               $_SESSION["mail"]=$mail;
               $_SESSION["id"]=$id;
               
                if ($rol == "usuari") {
                  $_SESSION["rol"]=1;

                    header("Location: http://localhost/PHP_vista_controller/");
                }
                if ($rol == "Admin") {
                    $_SESSION["rol"]=2;

                    header("Location: http://localhost/PHP_vista_controller/");
                }
                if ($rol == "baixa") {
                    $_SESSION["rol"]=3;

                    header("Location: http://localhost/PHP_vista_controller/");
                }
            } else {
                echo "¡NOT USER!";
            }
        }
        return $_SESSION["rol"];
  
    }
    public function Tencar_Sessio()
    {
        session_destroy();

    }
    
    public function MActualitzarUsuari()
    {
        require_once "views/usuari/actualizar.php";
    }
    public function ActualitzarUsuari()
    {
        $dni = $_GET["dni"];
        $rol = $_GET["rol"];
        $req = ("UPDATE `usuari` SET `Rol`='$rol' WHERE DNI='$dni'");
        echo $req;
        $con = database::conectar();
        $con->query($req);
        require_once "views/usuari/mostrarUsuari.php";
    }
}

<?php
require_once "models/invitat.php";

class invitatController{

public function mostrarAfegir(){
    echo "hola";
        require_once "views/afegirinvitat.php";
    }
    public function afegir(){
        if(isset($_POST)){
        $id=$_POST['id'];
        $invitado=$_POST['invitado'];
        $espectaculoid=$_POST['espectaculoid'];
        $invita= new invitat();
        $invita->setIdinvitado($id);
        $invita->setInvitado($invitado);
        $invita->setEspectaculo_idespectaculo(  $espectaculoid);
        $invita->insertar();

        }
    }
}

    ?>
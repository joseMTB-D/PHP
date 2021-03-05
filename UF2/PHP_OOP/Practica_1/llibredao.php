<?php
 include "Llibre.php" ;
class dao {

    public function insertar(){

      
        $mysql = new mysqli("localhost","root","","ExamenFormBDObj");
        if($mysql->connect_error){}
    
       
        $libro = new Llibre( $_GET["ibn"], $_GET["titol"], $_GET["categoria"], $_GET["preu"], $_GET["editorial"], $_GET["autor"]);
        $ibn=$libro->get_isbn();
        $titol=$libro->get_titol();
        $categoria=$libro->get_categoria();
        $preu=$libro->get_preu();
        $editorial=$libro->get_editorial();
        $autor=$libro->get_autor();

        $sqlin="INSERT INTO `llibres`(`ISBN`, `Titol`, `Categoria`, `Preu`, `Editorial`, `Autor`) VALUES ('$ibn','$titol','$categoria',$preu,'$editorial','$autor')";
        $mysql->query($sqlin)or die($mysql->error);
        $mysql->close();
        
    }
    public function actualitzar(){
        $mysql = new mysqli("localhost","root","","ExamenFormBDObj");
        if($mysql->connect_error){}
        $libro = new Llibre( $_GET["ibn"], $_GET["titol"], $_GET["categoria"], $_GET["preu"], $_GET["editorial"], $_GET["autor"]);
        $ibm=$libro->get_isbn();
        $titol=$libro->get_titol();
        $categoria=$libro->get_categoria();
        $preu=$libro->get_preu();
        $editorial=$libro->get_editorial();
        $autor=$libro->get_autor();
        $sqlin="UPDATE `llibres` SET `Titol`='$titol',`Categoria`='$categoria',`Preu`=$preu,`Editorial`='$editorial',`Autor`='$autor' WHERE `ISBN`='$ibm'";
        $mysql->query($sqlin)or die($mysql->error);
        $mysql->close();
    }
}

?>
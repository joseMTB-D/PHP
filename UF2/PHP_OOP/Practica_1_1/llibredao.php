<?php
 include "Llibre.php" ;
 include "conexion.php";
class dao {

    public function insertar(){

      
       $mysql=new conexion();
       
        $libro = new Llibre( $_GET["ibn"], $_GET["titol"], $_GET["categoria"], $_GET["preu"], $_GET["editorial"], $_GET["autor"]);
        $ibn=$libro->get_isbn();
        $titol=$libro->get_titol();
        $categoria=$libro->get_categoria();
        $preu=$libro->get_preu();
        $editorial=$libro->get_editorial();
        $autor=$libro->get_autor();

        
       

        $sqlin="INSERT INTO `llibres`(`ISBN`, `Titol`, `Categoria`, `Preu`, `Editorial`, `Autor`) VALUES ('$ibn','$titol','$categoria',$preu,'$editorial','$autor')";
        echo $sqlin;
        $mysql->Insert($sqlin)or die($mysql->error);
        $con->descon();
        
    }
    public function actualitzar(){
        $con=new conexion();

        $con->con();


        $con->descon();
    }
}

?>
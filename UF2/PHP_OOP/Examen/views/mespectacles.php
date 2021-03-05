<?php
//require_once "controllers/espectacleController.php";
$esp= new espectacle();
$resultat=$esp->Espectaclesdefaul();

$ruta="assets/img/";
echo "<div class='flex-container'>";
while($fila=$resultat->fetch_array()){
    echo"<div>";
    if(is_null($fila["foto"])){
        echo "<img src='".$ruta."default.jpg' alt=''width='100px' height='160px' class='center'>";
    }else{
        echo "<img src='".$ruta.$fila["foto"]."' alt=''width='100px' height='160px' class='center'>";
    }
    

    
    echo "<p>".$fila["espectaculo"]."</p>".
    "<p>".$fila["sinopsis"]."</p>";
    echo"</div>";
   
   
}
echo "</div>";



?>
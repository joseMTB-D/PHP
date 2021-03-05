<?php
require_once "controllers/llibreController.php";
require_once "config/parameters.php";

$llibre=llibreController::Llibredefault();

$ruta="assets/img/";
echo "<div class='flex-container'>";
while($fila=$llibre->fetch_array()){
    echo"<div>";
    echo "<img src='".$ruta.$fila["titol"].".jpg' alt=''width='100px' height='160px' class='center'>";
    echo "<p>".$fila["titol"]."</p>".
    "<p>".$fila["autor"]."</p>";
    echo"</div>";
   
   
}
echo "</div>";



?>
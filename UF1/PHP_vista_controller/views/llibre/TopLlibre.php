<?php
require_once "controllers/llibreController.php";
$llibre=llibreController::LlibredefaultUser();
echo " <h2>Llibres</h2>";
echo"<br>";
$ruta="http://localhost/PHP_vista_controller/assets/img/";
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
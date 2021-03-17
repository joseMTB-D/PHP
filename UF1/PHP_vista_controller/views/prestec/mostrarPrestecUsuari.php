<?php
require_once "controllers/prestecController.php";
$prestec=prestecController::mostrarPrestecsUsuari();
echo " <h2>Prestecs</h2>";


echo"<br>";
echo "<div class='flex-container'>";
echo "<table>";
echo "<tr>
<th>codi</th>
<th>ISBN</th> 
<th>DNI</th>
<th>data_prestec</th>
<th>data_retorn</th> 
<th>retornat</th>
<th>Actualitzar</th>
</tr>";

while($fila=$prestec->fetch_array()){
if($fila["retornat"]==1){
    echo"<tr>
    <td>".$fila["codi"]."</td>
    <td>".$fila["ISBN"]."</td>
    <td>".$fila["DNI"]."</td>
    <td>".$fila["data_prestec"]."</td>
    <td>".$fila["data_retorn"]."</td>
    <td>".$fila["retornat"]."</td>
    <td>Retornat</td>
    </tr>";  
}else if($fila["retornat"]==0){
    echo"<tr>
    <td>".$fila["codi"]."</td>
    <td>".$fila["ISBN"]."</td>
    <td>".$fila["DNI"]."</td>
    <td>".$fila["data_prestec"]."</td>
    <td>".$fila["data_retorn"]."</td>
    <td>".$fila["retornat"]."</td>
    <td> <a href='".base_url."prestec/actualizar&codi=".$fila['codi']."'>Actualizar</a></td>
    </tr>";  
}


}
echo "</table>";

echo "</div>";


?>
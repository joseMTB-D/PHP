<?php
require_once "controllers/usuariController.php";
$usuari=usuariController::MostrarUsuariAdmin();
echo " <h2>Usuaris</h2>";
echo"<br>";
echo "<div class='flex-container'>";
echo "<table>";
echo "<tr>
<th>DNI</th>
<th>Nom</th> 
<th>Telefon</th>
<th>Correu</th>
<th>Contrasenya</th> 
<th>Rol</th>
<th>Actualitzar</th>
</tr>";

while($fila=$usuari->fetch_array()){

echo"<tr>
<td>".$fila["DNI"]."</td>
<td>".$fila["nom"]."</td>
<td>".$fila["telefon"]."</td>
<td>".$fila["correu"]."</td>
<td>".$fila["contraseña"]."</td>
<td>".$fila["Rol"]."</td>
<td> <p><a href='".base_url."usuari/ActualitzarUsuari&dni=".$fila['DNI']."&rol=Admin'>Admin||</a><a href='".base_url."usuari/ActualitzarUsuari&dni=".$fila['DNI']."&rol=usuari'>Usuari||</a><a href='".base_url."usuari/ActualitzarUsuari&dni=".$fila['DNI']."&rol=baixa'>Baixa</a></p></td>
</tr>";

}
echo "</table>";

echo "</div>";

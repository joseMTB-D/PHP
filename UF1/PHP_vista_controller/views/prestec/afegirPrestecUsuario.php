<form action="http://localhost/PHP_vista_controller/prestec/afegir" method="post" enctype="multipart/form-data">
<h2>Afegir Prestec</h2>
<br>

<Label>Llibre</Label>
<select name="isbn" id="">
<?php
$con=database::conectar();
$sql="SELECT `Isbn`,`titol`FROM llibre";
$re=$con->query($sql);
while($fila = $re->fetch_array()){
    echo "<option value='" . $fila['Isbn'] . "'>" . $fila['titol'] . "</option>";
}
?>
</select>
<br>
<br>
<Label>Usuari</Label>
<br>
<input type="text" name="dni" id="" value="<?php echo $_SESSION["id"]; ?>" readonly>
<br>
<br>
<input type="submit" value="insertar" name="submit">
</form>
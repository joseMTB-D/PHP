<form action="http://localhost/PHP_vista_controller/llibre/afegir" method="post" enctype="multipart/form-data">
<h2>Afegir llibre</h2>
<br>
<Label>ISBN</Label>
<br>
<input type="text" name="isbn" id=""><br><br>
<Label>TITOL</Label>
<br>
<input type="text" name="titol" id=""><br><br>
<Label>CATEGORIA</Label>
<br>
<input type="text" name="categoria" id=""><br><br>
<Label>PREU</Label>
<br>
<input type="decimal" name="preu" id=""><br><br>
<Label>EDITORIAL</Label>
<br>
<input type="text" name="editorial" id=""><br><br>
<Label>AUTOR</Label>
<br>
<input type="text" name="autor" id=""><br><br>
<Label>Portada</Label>
<br>
<input type="file" name="foto" id="" value="sube la portada">
<br><br>
<input type="submit" value="insertar" name="submit">
</form>
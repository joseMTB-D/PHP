<form action="index.php?controller=invitat&action=afegir" method="post" enctype="multipart/form-data">
<Label>id_Invitado</Label>
<br>
<input type="text" name="id" id=""><br><br>
<Label>invitado</Label>
<br>
<input type="text" name="invitado" id=""><br><br>

<?php
$con=database::conectar();
$sql="SELECT idespectaculo,espectaculo FROM `espectaculo`";
        $resultat= $con->query($sql);


    ?>
    Selecciona del espectacle: <br>
    <select name="espectaculoid" id="">
    <?php
       while($fila = $resultat->fetch_array()){
        echo "<option value='" . $fila['idespectaculo'] . "'>" . $fila['espectaculo'] . "</option>";
    }
    ?>
<br><br><br>
<input type="submit" value="insertar" name="submit">
</form>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    <?php
        $mysql = new mysqli("localhost","root","","empresa");
        if($mysql->connect_error){
            die(`You are alone`);
        }
        $sql="SELECT CLIENT_COD,NOM FROM client";
        $resultat= $mysql->query($sql);


    ?>
    Selecciona el client: <br>
    <select name="client" id="">
    <?php
       while($fila = $resultat->fetch_array()){
        echo "<option value='" . $fila['CLIENT_COD'] . "'>" . $fila['NOM'] . "</option>";
    }
    ?>
    </select>
   <br>
   <input type="submit" value="Insertar dades" name="insertar">
   <br>
  <input type="submit" value="Mostrar taula" name="taula">
    </form>
 <?php
 if(isset($_REQUEST["taula"])){
 $codic=$_REQUEST["client"];
 
echo"
<table>
<tr>
<th>NOM</th>
<th>COM_NUM</th>
<th>COM-DATA</th>
<th>TOTAL</th>
</tr>";

$sqlc="SELECT NOM ,COM_NUM,COM_DATA,TOTAL FROM comanda INNER JOIN client ON comanda.CLIENT_COD = client.CLIENT_COD WHERE comanda.CLIENT_COD=$codic";
$re=$mysql->query($sqlc);
$fila=$re->fetch_array();
while($fila = $re->fetch_array()){
    echo "<tr>
        <td>".$fila["NOM"]."</td>
        <td>".$fila["COM_NUM"]."</td>
        <td>".$fila["COM_DATA"]."</td>
        <td>".$fila["TOTAL"]."</td>
    </tr>";

}

echo "</table>";
}


if(isset($_REQUEST["insertar"]))
{
    header("Location:insertar.php");
}
?>

</body>
</html>
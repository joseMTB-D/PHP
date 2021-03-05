<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<style>
        table {
border: 1px solid black;
border-collapse: collapse;
}
th{
    border: 1px solid black;
    border-collapse: collapse; 
}
td{
    border: 1px solid black;
    border-collapse: collapse;

    
}

    </style>
    <form action="form_image.php" method="post" enctype="multipart/form-data">
        Nom:
        <input type="text" name="nom" placeholder="Pon tu nombre" id="" value=""><br>
        Data de naixement:
        <input type="date" name="data" id="" ><br>
        Correu:
        <input type="email" name="correu" id="" ><br>
        Selecciona la foto:
        <input type="file" name="foto" ><br>
        <input type="submit" name="submit" value="Enviar">
        <input type="submit" value="tablas" name="tabla">
    </form>
    <?php
    if(isset($_REQUEST['submit'])){
        $nomusuari = $_REQUEST["nom"];
        $correu = $_REQUEST["correu"];
        $data=$_REQUEST["data"];
        $ruta="images/";
        copy($_FILES['foto']['tmp_name'], $ruta . $correu . ".jpg");
        echo "La foto se registro en el servidor.<br>";
        echo "<img src=".$ruta. $correu . ".jpg height='100px' width='100px'>";

        $mysql = new mysqli("localhost","root","","php_img");
        if($mysql->connect_error){
            die(`You are alone`);
        }
        $sqlcm="INSERT INTO `usuario` (`correo`, `nom`, `Data_de_Naixement`) VALUES ('$correu', '$nomusuari', '$data');";
    //echo $sqlcm;
         $mysql->query( $sqlcm)or die($mysql->error);
         $mysql->close();
    }
    if(isset($_REQUEST["tabla"])){
        $mysql = new mysqli("localhost","root","","php_img");
        $ruta= "images/";
        if($mysql->connect_error){}
            
        echo"
   <table>
   <tr>
   <th>correo</th>
   <th>nom</th>
   <th>Data_de_Naixement</th>
   <th>Imatge</th>
   <th>Borrar</th>
   <th>Actualitzar</th>
   </tr>
   ";
   $sqlpd="SELECT `correo`, `nom`, `Data_de_Naixement` FROM `usuario`";
   $re=$mysql->query($sqlpd);
$fila=$re->fetch_array();
while($fila = $re->fetch_array()){
    echo "<tr>
    <td>".$fila["correo"]."</td>
    <td>".$fila["nom"]."</td>
    <td>".$fila["Data_de_Naixement"]."</td>";
    echo "<td>" . "<img src=".$ruta . $fila["correo"].".jpg height='60px' width='60px'>" . "</td>";
    echo" <td>"." <a href=borrar.php?correo=".$fila["correo"].">".$fila["correo"]."</a></td>";
    echo" <td>"." <a href=actualitza.php?correo=".$fila["correo"].">".$fila["correo"]."</a></td>
   </tr>";
    
}
echo "</table>";
    }
    

  ?>
 

</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repas</title>
</head>
<body>
<form action="repas.php">
Nombre:
    <input type="text" name="nombre" id=""><br>
Apellido:
<input type="text" name="apellido" id=""><br>
Fecha de Nacimiento:
<input type="date" name="nacimiento" id=""><br>
Sugerencia:
<input type="textbox" name="sugerencia" id="">
<input type="submit" name="registrar"value="Registrar">
</form>

<?php
//tabla


if(isset($_REQUEST["registrar"])){
    session_Start();
   
$nombre="";
$nombred="";
$apellido="";
$nacimiento="";
$sugerencia="";

$nombre=$_REQUEST["nombre"];
$apellido=$_REQUEST["apellido"];
$nacimiento=$_REQUEST["nacimiento"];
$sugerencia=$_REQUEST["sugerencia"];

    if(isset($_SESSION["nombre"])){
    $_SESSION["nombre"][]=$nombre;
    $_SESSION["apellido"][]=$apellido;
    $_SESSION["nacimiento"][]=$nacimiento;
    $_SESSION["sugerencia"][]=$sugerencia;
    }else{
    $_SESSION["nombre"]=[];
    $_SESSION["nombre"][]=$nombre;
    $_SESSION["apellido"]=[];
    $_SESSION["apellido"][]=$apellido;
    $_SESSION["nacimiento"]=[];
    $_SESSION["nacimiento"][]=$nacimiento;
    $_SESSION["sugerencia"]=[];
    $_SESSION["sugerencia"][]=$sugerencia;
    }
    echo"<table>
    <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Nacimiento</th>
    <th>Sugerencia</th>
    </tr>";
   
    for ($i=0; $i <count($_SESSION["nombre"]) ; $i++) { 
        echo"
        <tr>
        <td>".$_SESSION["nombre"][$i]."</td>
        <td>".$_SESSION["apellido"][$i]."</td>
        <td>".$_SESSION["nacimiento"][$i]."</td>
        <td>".$_SESSION["sugerencia"][$i]."</td>
        </tr>
        ";
    }
    echo "</table>";
    
}
echo "<br>";
//split

$letras=[];
$letras=explode(" ",$sugerencia);
foreach ($letras as  $a) {
    echo $a ."<br>";
}

for ($i=0; $i <strlen($nombre) ; $i++) { 
    $_SESSION["nombred"][]=$nombre[$i];
    echo "letra :". ($i+1) ." == ".$_SESSION["nombred"][$i]."<br>";
}
   

?>



</body>
</html>
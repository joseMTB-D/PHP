<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="detalle_ticket.php">
    <?php
    $mysql= new mysqli("localhost","root","","repaso_dam-1");
    if($mysql->connect_error){}
    $sql="SELECT codi FROM ticket ORDER BY codi DESC LIMIT 1";
    $resultado = $mysql->query($sql) or die($mysql->error);
    $fila=$resultado->fetch_array();
    $codigo_t=$fila["codi"];
    echo"El codi del ticket es ". $codigo_t ."<br>";
    $sql2="SELECT codi,nom,preu FROM productes";
    $resultado=$mysql->query($sql2)or die($mysql->error);
    ?>
    <select name="productos" id="">
    <?php
    while($fila=$resultado->fetch_array()){
        echo "<option value='" . $fila['codi'] . "'>" . $fila['nom'] ." ".$fila['preu'] ."</option>";
    }
    ?>
    </select>
    <br>
    Cantidad: <br>
    <input type="number" min="0" max="100" required placehorder="Cantidad" name="cantidad" id="">
    <br>
    insertar datos: <br>
    <input type="submit" value="Insertar datos" name="producto">
    <br>
    <input type="submit" value="Finalizar compra" name="final">
    </form>
    <?php
    if(isset($_REQUEST["producto"])){
        $codigop=$_REQUEST["productos"];
        $cantidad =$_REQUEST["cantidad"];
        $sqldt="INSERT INTO detall_ticket VALUES($codigop,$codigo_t,$cantidad)";
        $mysql->query($sqldt) or die($mysql->error);
    }
    if(isset($_REQUEST["final"])){
        header("Location:mostrar_ticket.php");
    }



    ?>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ticket.php">
    Crear Ticket: <br>
    <?php
    $mysql= new mysqli("localhost","root","","repaso_dam-1");
    if($mysql->connect_error){}
    $sql= "SELECT codi,nom FROM client";
    $resultado = $mysql->query($sql);
    ?>
    <form action="ticket.php">
    <select name="cliente" id="">
    <?php
    while($fila = $resultado->fetch_array()){
        echo "<option value='". $fila['codi']. "'>". $fila["nom"] ."</option>";
    }
    ?>
    </select>
    <input type="submit" value="Crear ticket" name="ct">
    </form>
    <?php
    if(isset($_REQUEST["ct"])){
        $cliente =$_REQUEST["cliente"];
        $sqlt="INSERT INTO ticket (data_ticket,total,codi_c)VALUES(NOW(),NULL,$cliente)";
        $mysql->query($sqlt) or die($mysql->error);
        header("Location:detalle_ticket.php");
   
    }
    $mysql->close();
    ?>
    
    
    
    
    
    </select>
    
    
    
    </form>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="productos.php">
    Introducir nuevo producto:
    <br>
    <br>
    Nombre: <br>
    <input type="text" name="nombre" id=""><br>
    Precio: <br>
    <input type="number" name="precio" id="" min="0"> <br>
    Cantidad: <br>
    <input type="number" name="cantidad" id="" min="1"> <br>
    <input type="submit" value="Añadir producto" name="añadir"> <br>
    <input type="submit" value="Generar ticket" name="gt"> <br>
    </form>
    <?php
    if(isset($_REQUEST["añadir"])){
        $nombre=$_REQUEST["nombre"];
        $precio=$_REQUEST["precio"];
        $cantidad=$_REQUEST["cantidad"];
        $mysql= new mysqli("localhost","root","","repaso_dam-1");
        if($mysql->connect_error){
        }else{
            echo " Conectado";
        }
        //añadir producto
        $mysql->query("INSERT INTO productes (nom,preu,stock) VALUES('$nombre',$precio,$cantidad)")or die($mysql->error);
        $mysql->close();
    }
    if(isset($_REQUEST["gt"])){
        header("Location:ticket.php");
    }
    ?>

</body>
</html>
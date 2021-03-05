<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="random.php" method="post">
    
    <?php
   
if(isset($_REQUEST["boto"])){//pulsar boton
    session_start();
if(isset($_SESSION["random"] )){//comprobar si $_SESSION existe
    //si existe
    $n = $_REQUEST["Numero"];//inserta el valor en n
        if($n==$_SESSION["random"]){//comprueba si n es igual a $_SESSION
            echo "El numero $n es el correcte";
            session_destroy();
        }else{
            echo "No has acertat, el numero ". $_SESSION["random"] ." era el correcte";
           
        }
        }else{//si no existe
    $_SESSION["random"]= rand(1,10);//crea el numero random y lo inserta en $_SESSION
    $n = $_REQUEST["Numero"];//inserta el valor en n
    if($n==$_SESSION["random"]){//comprueba si n es igual a $_SESSION
        echo "El numero $n es el correcte";
        session_destroy();
    }else{
        echo "No has acertat, el numero ". $_SESSION["random"] ." era el correcte";
        
    }
}
    }

    ?>
    <br>
    Numero:
    <input type="text" name="Numero" id="" placeholder="Inserta el valor entre 1 i 10">
    <br>
    <input type="submit" name="boto" value="Comprovar">
    <br> 
    
    </form>
</body>
</html>
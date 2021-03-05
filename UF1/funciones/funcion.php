<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    numero 1: <br>
    <input type="number" name="valor1" id=""> <br>
    numero 2: <br>
    <input type="number" name="valor2" id=""> <br>
Selecciona operació: <br>
<input type="submit" value="Suma" name="suma"> 
<input type="submit" value="Resta" name="resta">
<input type="submit" value="Multiplica" name="multiplica">
<input type="submit" value="Divideix" name="divideix">
<br>
    </form>
    <?php

    $resultat=0;
    if(isset($_REQUEST["suma"])){
        $valor1=$_REQUEST['valor1'];
        $valor2=$_REQUEST['valor2'];
       echo suma($valor1,$valor2);
       
    }
    if(isset($_REQUEST["resta"])){
        $valor1=$_REQUEST['valor1'];
        $valor2=$_REQUEST['valor2']; 
        echo resta($valor1,$valor2);
    }
    if(isset($_REQUEST["multiplica"])){
        $valor1=$_REQUEST['valor1'];
        $valor2=$_REQUEST['valor2'];
        echo multiplica($valor1,$valor2);
    }
    if(isset($_REQUEST["divideix"])){
        $valor1=$_REQUEST['valor1'];
        $valor2=$_REQUEST['valor2'];
        if(($valor1==0) or ($valor2==0)){
            echo "No es pot dividir per 0";
        }else{
            echo divideix($valor1,$valor2);
        }
       
    }
    function suma($a,$b){
        $resultat=$a + $b;
        return $resultat;
     }
     function resta($a,$b){
        $resultat=$a - $b;
        return $resultat;
     }
     function multiplica($a,$b){
        $resultat=$a * $b;
        return $resultat;
     }
     function divideix($a,$b){
        $resultat=$a / $b;
        return $resultat;
     }
   
    ?>
</body>
</html>
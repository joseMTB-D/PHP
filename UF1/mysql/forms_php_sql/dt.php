<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dt.php">
    <?php
    $mysql = new mysqli("localhost","root","","repaso_dam-1");
    if($mysql->connect_error){
     
    }
    $sqll=("SELECT codi FROM `ticket` ORDER BY codi DESC LIMIT 1");
    $resultat=$mysql->query($sqll) or die($mysql ->error);
    $fila=$resultat->fetch_array();
    $codi_t=$fila["codi"];
    echo "El codi del ticket es ".$codi_t;
    echo "<br>";
    $sql="SELECT codi,nom,preu FROM productes";
    $resultat=$mysql->query($sql) or die($mysql ->error);
    ?>
    <select name="Productes" id="">
    <?php
  while($fila = $resultat->fetch_array()){
      echo "Nom:";
     echo "<option value='" . $fila['codi'] . "'>" . $fila['nom'] ." ".$fila['preu'] ."</option>";
     
 }


    ?>
     </select>
     <br>
     Quantitat:
     <br>
     <input type="number" min="0" max="100" required placehorder="quantitat" name="quantitat" id="">
     <br>
     Entrar dades:
     <br>
     <input type="submit" name="producte" value="Insertar Producte">
    <br>
    <input type="submit" name="final" value="final compra">
    </form>
        <?php
        if(isset($_REQUEST["producte"])){
            $codip=$_REQUEST["Productes"];
            $quantitat=$_REQUEST["quantitat"];
            $sqldt="INSERT INTO detall_ticket VALUES($codip,$codi_t,$quantitat)";
            $mysql->query($sqldt)or die($mysql->error);

            $mysql->close();
        }
        if(isset($_REQUEST["final"])){
            header("Location:mt.php");
        }


        ?>
    </body>
</html>
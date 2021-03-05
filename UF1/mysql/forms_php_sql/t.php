<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="t.php" method="post">
    Crear Ticket:
    <?php
    $mysql = new mysqli("localhost","root","","repaso_dam-1");
    if($mysql->connect_error){
        die(`You are alone`);
    }

    $sql= "SELECT codi,nom FROM client";
    $resultat = $mysql->query($sql);

   ?>
  <form action="t.php" method="post">
   <select name="client" id="">
   <?php
 while($fila = $resultat->fetch_array()){
    echo "<option value='" . $fila['codi'] . "'>" . $fila['nom'] . "</option>";
}
   ?>
   </select>
  <input type="submit" name="submit" value=" crear ticket">
  </form>

  <?php
  if(isset($_REQUEST["submit"])){
  $cli=$_REQUEST["client"];
    $sqlt=("INSERT INTO ticket(data_ticket,total,codi_c) VALUES(NOW(),NULL,$cli)");
    $mysql->query($sqlt) or die($mysql->error);
    header("Location:dt.php");
    


  }
  $mysql->close();
   ?>


    </body>
</html>
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
<form action="actualitza.php" method="post" enctype="multipart/form-data">
    <?php
     $mysql = new  mysqli("localhost","root","","php_img");
     if($mysql->connect_error){
         die("Connexió fallida");
     } 
     $correu = $_GET["correo"];
     $sql = "SELECT `nom`,`Data_de_Naixement` FROM `usuario` WHERE `correo`LIKE '$correu'"; 
     $resultat= $mysql->query($sql) or die($mysql->error);
   $fila = $resultat->fetch_array();
   echo "Nom:";
   echo "<input type='text' name='nom1' placeholder='Pon tu nombre' id='' value='".$fila['nom']."'><br>";
       echo" Data de naixement:";
       echo" <input type='date' name='data1' id='' value='".$fila['Data_de_Naixement']."'><br>";
       echo  "Correo Electronic: $correu ";
       echo "<br>";
       echo" <input type='file' name='foto' ><br>";
       echo"<input type='submit' name='submit' value='Enviar'>
      ";
     
       if(isset($_REQUEST['submit'])){
        $mysql = new  mysqli("localhost","root","","php_img");
        if($mysql->connect_error){
            die("Connexió fallida");
        } 
        $nomusuari = $_REQUEST["nom1"];
        $data=$_REQUEST["data1"];
        $correu=$_REQUEST["correu"];
        $mysql = new mysqli("localhost","root","","php_img");
        $sqlcm="UPDATE `usuario` SET `nom`='$nomusuari',`Data_de_Naixement`='$data' WHERE `correo`='$correu'";
        $mysql->query($sqlcm) or die($mysql->error);
        echo $_REQUEST['foto'];
     
        $ruta="images/";
        copy($_FILES['foto']['tmp_name'], $ruta . $correu . ".jpg");
        
        echo $sqlcm;
        $mysql->close();
     header("Location:form_image.php"); // Redirecciono a la pàgina anterior

       
    }

 
    
   
   
    
    ?>

    </form>
</body>
</html>
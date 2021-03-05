<html lang="en">
<head>
  <link rel="stylesheet" href="Style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Exercici1.php">
Nom:
<input type="text" name="nom" id=""><br>
Nota 1T:
<input type="text" name="1t" id=""><br>
Nota 2T:
<input type="text" name="2t" id=""><br>
Nota 3T:
<input type="text" name="3t" id=""><br>
Nota Final:
<input type="text" name="nt" id=""><br>
<input type="submit" value="Registrar" name="reg"><br>
</form>
<?php
session_start();
if (isset($_REQUEST["reg"])){
$nom="";
$nota1="";
$nota2="";
$nota3="";
$notaf="";

$nom=$_REQUEST["nom"];
$nota1=$_REQUEST["1t"];
$nota2=$_REQUEST["2t"];
$nota3=$_REQUEST["3t"];
$notaf=$_REQUEST["nt"];

if(isset($_SESSION["nom"])){
    $_SESSION["nom"][]=$nom;
    $_SESSION["1t"][]=$nota1;
    $_SESSION["2t"][]=$nota2;
    $_SESSION["3t"][]=$nota3;
    $_SESSION["nt"][]=$notaf;
}else{
    $_SESSION["nom"]=[];
    $_SESSION["nom"][]=$nom;




    $_SESSION["1t"]=[];
    $_SESSION["1t"][]=$nota1;




    $_SESSION["2t"]=[];
    $_SESSION["2t"][]=$nota2;
    $_SESSION["3t"]=[];
    $_SESSION["3t"][]=$nota3;
    $_SESSION["nt"]=[];
    $_SESSION["nt"][]=$notaf;
}
echo"<table>
<tr>
<th>Nom</th>
<th>Nota 1T</th>
<th>Nota 2T</th>
<th>Nota 3T</th>
<th>Nota FINAL</th>
</tr>";

for ($i=0; $i <count($_SESSION["nom"]); $i++) { 
   
    echo"
    
    <tr>
    <td>".$_SESSION["nom"][$i]."</td>
    <td>".$_SESSION["1t"][$i]."</td>
    <td>".$_SESSION["2t"][$i]."</td>
    <td>".$_SESSION["3t"][$i]."</td>
    <td>".$_SESSION["nt"][$i]."</td>
    </tr>
   ";
    }
   
    echo "</table>";
    
}
echo"<br>";





?>


    
</body>
</html>
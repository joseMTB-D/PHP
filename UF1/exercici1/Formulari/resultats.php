<html lang="en">
<head>
<link rel="stylesheet"  href="Style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
$nom = "";
$cognom = "";
$naix= "";
$DNI = "";
$pass= "";
$sex= "";
$curs="";
$poblat= "";
$presentacio= "";


//agafar dades
$nom = $_REQUEST["Nom"];
$cognom = $_REQUEST["Cognoms"];
$naix= $_REQUEST["Anys"];
$DNI = $_REQUEST["DNI"];
$pass= $_REQUEST["Contrasenya"];
$sex=$_REQUEST["sexe"];
$curs="";
$poblat=$_REQUEST["població"];
$presentacio=$_REQUEST["textarea"];

if (isset($_REQUEST['DAM'])) {
    $curs = $curs ." " .$_REQUEST['DAM'];
    
    }
    if (isset($_REQUEST['ARI'])) {
        $curs=$curs." ". $_REQUEST['ARI'];
       
    }
    if (isset($_REQUEST['STI'])) {
        $curs = $curs ." ".$_REQUEST['STI'];
        
    }
    //nom
if(isset($_SESSION["nom"])){
    $_SESSION["nom"][]=$nom;
    $_SESSION["cognom"][]=$cognom;
    $_SESSION["naix"][]=$naix;
    $_SESSION["DNI"][]=$DNI;
    $_SESSION["sex"][]=$sex;
    $_SESSION["població"][]=$poblat;
    $_SESSION["textarea"][]=$presentacio;
}else{
    $_SESSION["nom"]=[];
    $_SESSION["nom"][]=$nom;
    $_SESSION["cognom"]=[];
    $_SESSION["cognom"][]=$cognom;
    $_SESSION["naix"]=[];
    $_SESSION["naix"][]=$naix;
    $_SESSION["DNI"]=[];
    $_SESSION["DNI"][]=$DNI;
    $_SESSION["sex"]=[];
    $_SESSION["sex"][]=$sex;
    $_SESSION["curs"]=[];
    $_SESSION["curs"][]=$curs;
    $_SESSION["població"]=[];
    $_SESSION["població"][]=$poblat;
    $_SESSION["textarea"]=[];
    $_SESSION["textarea"][]=$presentacio;
}
?>
</body>
<body>
   
<?php
echo "
<table id='tabla1'>
<tr>
<th>Nom</th>
<th>Cognom</th>
<th>Edat</th>
<th>DNI</th>
<th>Sexe</th>
<th>Curs</th>
<th>Població</th>
<th>Presentació</th>
</tr>";

for($i=0;$i<count($_SESSION["nom"]);$i++){
echo "
<tr>
<td>".$_SESSION["nom"][$i]."</td>
<td>".$_SESSION["cognom"][$i]."</td>
<td>".$_SESSION["naix"][$i]."</td>
<td>".$_SESSION["DNI"][$i]."</td>
<td>".$_SESSION["sex"][$i]."</td>
<td>".$_SESSION["curs"][$i]."</td>
<td>".$_SESSION["població"][$i]."</td>
<td>".$_SESSION["textarea"][$i]."</td>
</tr>
";
}
echo"
</table>";
?>
<?php
/*
echo '<br>';
$info=[];
    $info['Nom']=$nom;
    $info['Cognom']=$cognom;
    $info['Edat']=$naix;
    $info['DNI']=$DNI;
    $info['Sexe']=$sex;
    $info['Curs']=$curs;
    $info['Poblacio']=$poblat;
    $info['Presentacio']=$presentacio;
    
//$Info["Nom"=>$nom..ETC];
    /*for($i=0;$i<$info.length;$i++){
        echo $info[$i] . "|| ";
    }
    foreach($info as $clau=>$valor){
        echo "El ". $clau ." es: " .$valor . "||" ;
    }
*/



?>

<form action="resultats.php" method="post">
<input type="submit" name="borrar" value="Reset">
</form>
<?php
if(isset($_REQUEST["borrar"])){
    session_destroy();
    header("Location: formulari.php");//volver a la direccion

}
?>
<br>
<form action="formulari.php" method="post">
<input type="submit" name="formulari" value="Tornar al formulari">
</form>





</body>





</html>
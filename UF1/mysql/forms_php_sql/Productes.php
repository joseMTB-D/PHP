<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="productes.php">
    Nom Producte:<br>
    <input type="text" name="nom"><br>
    Preu:<br>
    <input type="text" name="preu"><br>
    Stock:<br>
    <input type="text" name="stock"><br>
    <input type="submit" value="Registrar" name="insert">
    </form>
<?php
if(isset($_REQUEST["insert"])){
$nom= $_REQUEST["nom"];
$preu=$_REQUEST["preu"];
$stock=$_REQUEST["stock"];

$mysql = new mysqli("localhost","root","","repaso_dam-1");
if($mysql->connect_error){
    die(`You are alone`);
}else{
   echo 'We are with you';
}

$mysql->query("INSERT INTO productes(nom,preu,stock) VALUES('$nom','$preu','$stock')") or die($mysql->error);


$mysql->close();
header("Location:t.php");

}
?>
</body>
</html>
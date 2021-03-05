<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
    <Style>

        table,tr,td,th{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </Style>
</head>
<body>
<h1>El Seu ticket</h1>
<br>
<h5><?php
 $mysql = new mysqli("localhost","root","","repaso_dam-1");
 if($mysql->connect_error){
     die(`You are alone`);
 }
$sqll=("SELECT codi FROM `ticket` ORDER BY codi DESC LIMIT 1");
$resultat=$mysql->query($sqll) or die($mysql ->error);
$fila=$resultat->fetch_array();
$codit=$fila["codi"];
$sqlnc="SELECT c.nom FROM ticket as t INNER JOIN client as c ON c.codi=t.codi_c 
WHERE t.codi = $codit";
$resultats=$mysql->query($sqlnc);
$fila=$resultats->fetch_array();
$nomc=$fila["nom"];
echo"Nom del client:" .$nomc;
?>
</h5>
<table>
<tr>
<th>Nom Producte</th>
<th>Preu Unitari</th>
<th>Quantitat</th>
<th>Subtotal total</th>
</tr>
<?php
$total=0;
$sqlpd="SELECT nom,preu,detall_ticket.quantitat FROM productes INNER JOIN detall_ticket ON productes.codi =detall_ticket.codi_p";
$re=$mysql->query($sqlpd);
$fila=$re->fetch_array();
while($fila = $re->fetch_array()){
    echo "<tr>
    <th>".$fila["nom"]."</th>
    <th>".$fila["preu"]."</th>
    <th>".$fila["quantitat"]."</th>
    <th>".$fila["preu"]*$fila["quantitat"]."</th>
    </tr>";
    $total=$total+$fila["preu"]*$fila["quantitat"];
}

?>
</table>
    <?php
echo "<h3>Total Import: ".$total." €";
    ?>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>

        table,tr,td,th{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </Style>
</head>
<body>
<h1>Su ticket</h1>
<h4>
<?php
$mysql = new mysqli("localhost","root","","repaso_dam-1");
if($mysql->connect_error){}
$sql=("SELECT codi FROM `ticket` ORDER BY codi DESC LIMIT 1");
$resultado = $mysql->query($sql);
$fila=$resultado->fetch_array();
$codigo_t=$fila["codi"];
$sqlnc="SELECT c.nom FROM ticket as t INNER JOIN client as c ON c.codi= t.codi_c
 WHERE t.codi = $codigo_t";
 $resultados=$mysql->query($sqlnc);
 $fila=$resultados->fetch_array();
 $nombrec=$fila["nom"];
?>
</h4>

<table>
<tr>
<th>Nombre Producto</th>
<th>Precio Unitario</th>
<th>Cantidad</th>
<th>Subtotal</th>
</tr>
<?php
$total=0;
$sqlpd="SELECT nom,preu,detall_ticket.quantitat FROM productes INNER JOIN detall_ticket ON productes.codi = detall_ticket.codi_p";
$re=$mysql->query($sqlpd);
$fila=$re->fetch_array();
while($fila=$re->fetch_array()){
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
echo "<h4> Total del importe: ".$total." €";
    ?>
</body>
</html>
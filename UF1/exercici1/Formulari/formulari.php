<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="resultats.php" method="post" >
Nom:
<input type="text" name="Nom" id="" placeholder="Inserta el teu nom">
<br>
Cognoms:
<input type="text" name="Cognoms" id="" placeholder="Cognom">
<br>
Edat:
<input type="date" name="Anys" id="" >
<br>
DNI:
<input type="text" name="DNI" id="" placeholder="Inserta el teu DNI">
<br>
Contrasenya:
<input type="password" name="Contrasenya" id="" placeholder="Inserta una contrasenya valida">
<br>
<p>
Indica el sexe:
<br>
Home:<input type="radio" name="sexe" id="" value="home">
<br>
Dona:<input type="radio" name="sexe" id="" value="dona">
<br>

</p>
<p>
DAM:<input type="checkbox" name="DAM" id="" value="DAM">
<br>
ARI:<input type="checkbox" name="ARI" id="" value="ARI">
<br>
STI:<input type="checkbox" name="STI" id="" value="STI">
</p>
<p>
Poblacio:
<select name="població" id="">
<option value=""></option>
<option value="Mollerussa">Mollerussa</option>
<option value="Lleida">Lleida</option>
<option value="Palau">Palau</option>
<option value="Balager">Balager</option>
<option value="Bellpuig">Bellpuig</option>
</select>
</p>

<p>
Presentació:
<br>
<textarea name="textarea" id="" cols="30" rows="10">

</textarea>

</p>

<input type="submit" value="Insertar">



</body>
</html>
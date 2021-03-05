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
    <form action="mostrar_insetar_tabla.php" method="post" enctype="multipart/form-data"> 
        Tria una opcio: <br>
        <select name="tria" id="">
            <option value="1">Taula client</option>
            <option value="2">Taula producte</option>
            <option value="3">Taula comanda</option>
            <option value="4">Taula detall</option>
            <option value="5">Taula dept</option>
            <option value="6">Taula emp</option>
        </select>
        <br>

  
  
        <br>
        <input type="submit" value="Mostrar formulari" name="mf">
        
        <input type="submit" value="Mostrar taules" name="mostrar">
        <br>
        <br>

        <?php
session_start();
  $mysql = new mysqli("localhost","root","","empresa");
  if($mysql->connect_error){
      die(`You are alone`);
  }
  $sqlcc="SELECT CLIENT_COD FROM `client` ORDER BY CLIENT_COD DESC LIMIT 1";
  $sqlnc="SELECT COM_NUM FROM `comanda` ORDER BY COM_NUM DESC LIMIT 1";
  $resultat= $mysql->query($sqlcc);
  $resultat2=$mysql->query($sqlnc);
  $fila=$resultat->fetch_array();
  $fila2=$resultat2->fetch_array();
  $p=0;
  $resultat=$fila['CLIENT_COD']+1;
  $resultat2=$fila2['COM_NUM']+1;

  

    if(isset($_REQUEST["mf"]))
    {
        $_SESSION["codi"]=$_REQUEST["tria"];
        if($_SESSION["codi"]==0){
            echo "Seleciona una taula";
        }else{
    if($_SESSION["codi"]==1){

        echo "
            <br>
        Codi client: $resultat
        <br>
        Nom:
        <input type='text' name=' nom' id=''>
        <br>
        Adreça:
        <input type='text' name='adreca' id=''>
        <br>
        Estat:
        <input type='text' name=' estat' id=''>
        <br>
        Ciutat:
        <input type='text' name='ciutat' id=''>
        <br>
        CP:
        <input type='number' name='cp' id=''  min='0'>
        <br>
        Area:
        <input type='number' name='area' id=''  min='0'>
        <br>
        Tlf:
        <input type='text' name='tlf' id=''>
        <br>
        Tria un Empleat: <br>
    <select name='rpc' id=''>";
    $sql="SELECT EMP_NO,COGNOM FROM `emp` ";
    $re=$mysql->query($sql);
        while($fila = $re->fetch_array()){
        echo "<option value='" . $fila['EMP_NO'] . "'>" . $fila['COGNOM'] . "</option>";
    }
    echo"
    </select>
    <br>
    Limit Credit:";
    $limit=500;
    echo"
    $limit
    <br>
    Observacions:
    <br>
    <textarea name='obs' id='' cols='30' rows='10'></textarea>

        ";
       echo " <br><br><input type='submit' value='Insertar dades' name='insertar'> <br>";
    }
        if($_SESSION["codi"]==2){
            echo "<br>
            Codi producte:
            <br>
            <input type='number' name='producte' id=''  min='0'>
            <br>
            Descripció del producte:
            <br>
            <textarea name='descripcio' id='' cols='30' rows='10'></textarea>
            ";
            echo " <br><br><input type='submit' value='Insertar dades' name='insertar'> <br>";
            
        }
    if($_SESSION["codi"]==3){
        echo "
        <br>
        COM_NUM:
        $resultat2
        <br>
        COM_DATA:
        <input type='date' name='datac' id=''min='2000-01-01' max=''2021-01-01>
        <br>
        COM_TIPUS:
        <input type='text' name='tipus' id=''>
        <br>
        CLIENT:
        <select name='cc' id=''>";
        $sql="SELECT CLIENT_COD,NOM FROM `client` ";
    $re=$mysql->query($sql);
        while($fila = $re->fetch_array()){
        echo "<option value='" . $fila['CLIENT_COD'] . "'>" . $fila['NOM'] . "</option>";
    }
        echo "
        </select>
        <br>
        DATA_TRAMESA:
        <input type='date' name='datat' id=''  min='0' min='2000-01-01' max=''2021-01-01>
        <br>
        TOTAL:
        <input type='number' name='ctotal' id=''  min='0'>
            ";
        
            echo " <br><br><input type='submit' value='Insertar dades' name='insertar'> <br>";
 

        }
    if($_SESSION["codi"]==4){
        echo "
        <br>
        COM_NUM:
        <select name='cn' id=''>";
        $sql="SELECT COM_NUM FROM `comanda` ";
    $re=$mysql->query($sql);
        while($fila = $re->fetch_array()){
        echo "<option value='" . $fila['COM_NUM'] . "'>" . $fila['COM_NUM'] . "</option>";
    }
    echo"
    </select>
        <br>
        DETALL_NUM:
        <input type='text' name='dn' id=''>
        <br>
        PROD_NUM:
        <select name='pm' id=''>";
        $sql="SELECT PROD_NUM FROM `producte` ";
    $re=$mysql->query($sql);
        while($fila = $re->fetch_array()){
        echo "<option value='" . $fila['PROD_NUM'] . "'>" . $fila['PROD_NUM'] . "</option>";
    }

    echo"
    </select>
    <br>
    PREU_VENTA:
        <input type='Number' name='pv' id=''>
        <br>
        QUANTITAT:
        <input type='Number' name='q' id=''>
        <br>
        IMPORT:
        <input type='Number' name='imp' id=''>
         <br>
        ";
        
            echo " <br><br><input type='submit' value='Insertar dades' name='insertar'> <br>";
 
    }
    if($_SESSION["codi"]==5){
        echo "
        <br>

    DEPT_NO:
    <input type='text' name=' dn' id=''>
    <br>
    DNOM:
    <input type='text' name='dnom' id=''>
    <br>
    LOC:
    <input type='text' name=' loc' id=''>
    <br>
    ";
    echo " <br><br><input type='submit' value='Insertar dades' name='insertar'> <br>";

    }
    if($_SESSION["codi"]==6){
        echo"
        EMP_NO:
        <input type='Number' name=' en' id=''>
        <br>
        COGNOM:
        <input type='text' name='ce' id=''>
        <br>
        OFICI:
        <input type='text' name=' of' id=''>
        <br>
        CAP:
        <select name='pm' id=''>";
        $sql="SELECT EMP_NO,COGNOM FROM `emp` ";
    $re=$mysql->query($sql);
        while($fila = $re->fetch_array()){
        echo "<option value='" . $fila['EMP_NO'] . "'>" . $fila['COGNOM'] . "</option>";
    }
    echo"
    </select>
    <br>
    DATA_ALTA:
    <input type='date' name='de' id='' min='2000-01-01' max=''2021-01-01>
    <br>
    SALARI:
    <input type='Number' name='sen' id=''>
    <br>
    COMISSIO:
    <input type='Number' name='cm' id=''>
    <br> 
    DEPT_NO:
    <select name='de' id=''>";
        $sql="SELECT DEPT_NO,LOC FROM `dept` ";
    $re=$mysql->query($sql);
        while($fila = $re->fetch_array()){
        echo "<option value='" . $fila['DEPT_NO'] . "'>" . $fila['LOC'] . "</option>";
    }
    echo"</select>
        ";
        echo " <br><br><input type='submit' value='Insertar dades' name='insertar'> <br>";
}
    }

}   
    

    if(isset($_REQUEST["insertar"])){

        if($_SESSION["codi"]==1){
            $cnom=$_REQUEST["nom"];
            $cadre=$_REQUEST["adreca"];
            $cciutat=$_REQUEST["ciutat"];
            $cestat=$_REQUEST["estat"];
            $cp=$_REQUEST["cp"];
            $area=$_REQUEST["area"];;
            $tlf=$_REQUEST["tlf"];
            $rep=$_REQUEST["rpc"];
            $obs=$_REQUEST["obs"];
            $limit=500;
        $sqlic="INSERT INTO `client` (`CLIENT_COD`, `NOM`, `ADRECA`, `CIUTAT`, `ESTAT`, `CODI_POSTAL`, `AREA`, `TELEFON`, `REPR_COD`, `LIMIT_CREDIT`, `OBSERVACIONS`) VALUES ('$resultat', '$cnom', '$cadre', '$cciutat', '$cestat', '$cp', ' $area', '$tlf', ' $rep', '$limit', ' $obs');";
        $ec=$mysql->query($sqlic) or die($mysql->error);
            
        }

    if($_SESSION["codi"]==2){
        echo $p;
    $pnum=$_REQUEST["producte"];
    $des=$_REQUEST["descripcio"];
    $sqlp="INSERT INTO `producte` (`PROD_NUM`, `DESCRIPCIO`) VALUES ('$pnum', '$des')";
    
    $mysql->query( $sqlp)or die($mysql->error);

    }
    if($_SESSION["codi"]==3){
    $cmdata=$_REQUEST["datac"];
    $cmtipus=$_REQUEST["tipus"];
    $cmclient=$_REQUEST["cc"];
    $cmdata_tramesa=$_REQUEST["datat"];
    $cmtotal=$_REQUEST["ctotal"];
    $sqlcm="INSERT INTO `comanda` (`COM_NUM`, `COM_DATA`, `COM_TIPUS`, `CLIENT_COD`, `DATA_TRAMESA`, `TOTAL`) VALUES ('$resultat2','$cmdata','$cmtipus','$cmclient','$cmdata_tramesa', '$cmtotal');";
    //echo $sqlcm;
    $mysql->query( $sqlcm)or die($mysql->error);

    }
    if($_SESSION["codi"]==4){
       
   
   
    $cm=$_REQUEST["cn"];
    $dn=$_REQUEST["dn"];
    $pm=$_REQUEST["pm"];
    $pv=$_REQUEST["pv"];
    $q=$_REQUEST["q"];
    $imp=$_REQUEST["imp"];
    $sqld="INSERT INTO `detall` (`COM_NUM`, `DETALL_NUM`, `PROD_NUM`, `PREU_VENDA`, `QUANTITAT`, `IMPORT`) VALUES ('$cm', '$dn', '$pm', '$pv', '$q', '$imp');";
    $mysql->query( $sqld)or die($mysql->error);
   // echo $sqld;
}
    if($_SESSION["codi"]==5){
    $dn=$_REQUEST["dn"];
    $dnom=$_REQUEST["dnom"];
    $loc=$_REQUEST["loc"];
    $sqld="INSERT INTO `dept` (`DEPT_NO`, `DNOM`, `LOC`) VALUES ('$dn','$dnom','$loc');";
    $mysql->query( $sqld)or die($mysql->error);
    //-echo $sqld;

    }
    if($_SESSION["codi"]==6){
    
        $en=$_REQUEST["en"];
        $cogen=$_REQUEST["ce"];
        $ofien=$_REQUEST["of"];
        $cap=$_REQUEST["pm"];
        $dataen=$_REQUEST["de"];
        $salarien=$_REQUEST["sen"];
        $comen=$_REQUEST["cm"];
        $dept=$_REQUEST["de"];
        $sqld="INSERT INTO `emp` (`EMP_NO`, `COGNOM`, `OFICI`, `CAP`, `DATA_ALTA`, `SALARI`, `COMISSIO`, `DEPT_NO`) VALUES ('$en','$cogen','$ofien','$cap','$dataen','$salarien','$comen','$dept');";
        $mysql->query( $sqld)or die($mysql->error);
       // echo $sqld;
    
    }   

 }
if(isset($_REQUEST['mostrar']))
{
    $_SESSION["codi"]=$_REQUEST["tria"];
    if($_SESSION["codi"]==0){
        echo "Selecciona una taula";
    }else{    
    if($_SESSION["codi"]==1){
   echo"
   <table>
   <tr>
   <th>Codi_client</th>
   <th>Nom client</th>
   <th>Adreça</th>
   <th>Ciutat</th>
   <th>Estat</th>
   <th>CP</th>
   <th>Area</th>
   <th>Telefon</th>
   <th>REPR_COD</th>
   <th>Limit_Credit</th>
   <th>Observacions</th>
   </tr>";
   
   $sqlc="SELECT CLIENT_COD,NOM,ADRECA,CIUTAT,ESTAT,CODI_POSTAL,AREA,TELEFON,REPR_COD,LIMIT_CREDIT,OBSERVACIONS FROM `client` INNER JOIN emp on emp.EMP_NO= client.REPR_COD";
   $re=$mysql->query($sqlc);
   $fila=$re->fetch_array();
   while($fila = $re->fetch_array()){
       echo "<tr>
           <td>".$fila["CLIENT_COD"]."</td>
           <td>".$fila["NOM"]."</td>
           <td>".$fila["ADRECA"]."</td>
           <td>".$fila["CIUTAT"]."</td>
           <td>".$fila["ESTAT"]."</td>
           <td>".$fila["CODI_POSTAL"]."</td>
           <td>".$fila["AREA"]."</td>
           <td>".$fila["TELEFON"]."</td>
           <td>".$fila["REPR_COD"]."</td>
           <td>".$fila["LIMIT_CREDIT"]."</td>
           <td>".$fila["OBSERVACIONS"]."</td>
       </tr>";
   
   }
   
   echo "</table>";
   }
   if($_SESSION["codi"]==2){
    echo"
    <table>
    <tr>
    <th>PROD_NUM</th>
    <th>DESCRIPCIO</th>
    </tr>";
    
    $sqlc="SELECT PROD_NUM,DESCRIPCIO FROM producte";
    $re=$mysql->query($sqlc);
    $fila=$re->fetch_array();
    while($fila = $re->fetch_array()){
        echo "<tr>
            <td>".$fila["PROD_NUM"]."</td>
            <td>".$fila["DESCRIPCIO"]."</td>
        </tr>";
    
    }
    
    echo "</table>";
    }
    if($_SESSION["codi"]==3){
        echo"
        <table>
        <tr>
        <th>COM_NUM</th>
        <th>COM_DATA</th>
        <th>COM_TIPUS</th>
        <th>CLIENT_COD</th>
        <th>DATA_TRAMESA</th>
        <th>TOTAL</th>
        </tr>";
        
        $sqlc="SELECT COM_NUM,COM_DATA,COM_TIPUS,CLIENT_COD,DATA_TRAMESA,TOTAL FROM `comanda`";
        $re=$mysql->query($sqlc);
        $fila=$re->fetch_array();
        while($fila = $re->fetch_array()){
            echo "<tr>
                <td>".$fila["COM_NUM"]."</td>
                <td>".$fila["COM_DATA"]."</td>
                <td>".$fila["COM_TIPUS"]."</td>
                <td>".$fila["CLIENT_COD"]."</td>
                <td>".$fila["DATA_TRAMESA"]."</td>
                <td>".$fila["TOTAL"]."</td>
            </tr>";
        
        }
        
        echo "</table>";
        }
     
        if($_SESSION["codi"]==4){
            echo"
            <table>
            <tr>
            <th>COM_NUM</th>
            <th>DETALL_NUM</th>
            <th>PROD_NUM</th>
            <th>PREU_VENDA</th>
            <th>QUANTITAT</th>
            <th>IMPORT</th>
            </tr>";
            
            $sqlc="SELECT comanda.COM_NUM,detall.DETALL_NUM,producte.PROD_NUM,detall.PREU_VENDA,detall.QUANTITAT,detall.IMPORT FROM detall INNER JOIN comanda ON comanda.COM_NUM = detall.COM_NUM INNER JOIN producte ON producte.PROD_NUM = detall.PROD_NUM";
            $re=$mysql->query($sqlc);
            $fila=$re->fetch_array();
            while($fila = $re->fetch_array()){
                echo "<tr>
                    <td>".$fila["COM_NUM"]."</td>
                    <td>".$fila["DETALL_NUM"]."</td>
                    <td>".$fila["PROD_NUM"]."</td>
                    <td>".$fila["PREU_VENDA"]."</td>
                    <td>".$fila["QUANTITAT"]."</td>
                    <td>".$fila["IMPORT"]."</td>
                </tr>";
            
            }
            
            echo "</table>";
            }
            if($_SESSION["codi"]==5){
                echo"
                <table>
                <tr>
                <th>DEPT_NO</th>
                <th>DNOM</th>
                <th>LOC</th>
                </tr>";
                
                $sqlc="SELECT * FROM `dept`";
                $re=$mysql->query($sqlc);
                $fila=$re->fetch_array();
                while($fila = $re->fetch_array()){
                    echo "<tr>
                        <td>".$fila["DEPT_NO"]."</td>
                        <td>".$fila["DNOM"]."</td>
                        <td>".$fila["LOC"]."</td>
                    </tr>";
                
                }
                
                echo "</table>";
                }
        
                if($_SESSION["codi"]==6){
                    echo"
                    <table>
                    <tr>
                    <th>EMP_NO</th>
                    <th>COGNOM</th>
                    <th>OFICI</th>
                    <th>CAP</th>
                    <th>DATA_ALTA</th>
                    <th>SALARI</th>
                    <th>COMISSIO</th>
                    <th>DEPT_NO</th>
                    </tr>";
                    
                    $sqlc="
                    SELECT emp.EMP_NO,emp.COGNOM,emp.OFICI,emp.CAP,emp.DATA_ALTA,emp.SALARI,emp.COMISSIO,dept.DEPT_NO FROM emp INNER JOIN dept ON dept.DEPT_NO= emp.DEPT_NO";
                    $re=$mysql->query($sqlc);
                    $fila=$re->fetch_array();
                    while($fila = $re->fetch_array()){
                        echo "<tr>
                            <td>".$fila["EMP_NO"]."</td>
                            <td>".$fila["COGNOM"]."</td>
                            <td>".$fila["OFICI"]."</td>
                            <td>".$fila["CAP"]."</td>
                            <td>".$fila["DATA_ALTA"]."</td>
                            <td>".$fila["SALARI"]."</td>
                            <td>".$fila["COMISSIO"]."</td>
                            <td>".$fila["DEPT_NO"]."</td>
                        </tr>";
                    
                    }
                    
                    echo "</table>";
                    }

}
}
  ?>
<br>
<br>
Subir archivo(OPCIONAL):
<br>
<input type="file" name="foto" id="">
  <br>
  <br>
  <input type="submit" value="Enviar foto" name="ef">
  <br>
  <br>
  <input type="submit" value="Sortir" name="sortir">
  <br>
  <?php
  if(isset($_REQUEST["ef"])){
    copy($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);
  echo "La foto se registro en el servidor.<br>";
  $nom = $_FILES['foto']['name'];
  echo "<img src=\"$nom\" height='100px' width='100px'>";
  }
if(isset($_REQUEST['sortir']))
{
    session_destroy();
    header('Location:mostrar_insetar_tabla.php');
}
  ?>
  

    </form>

</body>

</html>
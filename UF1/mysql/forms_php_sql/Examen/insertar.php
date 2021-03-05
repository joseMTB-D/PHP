<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insertar.php" method="post"> 
        Tria una opcio: <br>
        <select name="tria" id="">
            <option value="1">Taula client</option>
            <option value="2">Taula producte</option>
        </select>

        <input type="submit" value="decisió" name="deci">
        <br>
        <br>
        <input type="submit" value="insertar dades" name="selecio">
        <br>
        <br>
        <input type="submit" value="tornar" name="tornar">

        <?php
session_start();
  $mysql = new mysqli("localhost","root","","empresa");
  if($mysql->connect_error){
      die(`You are alone`);
  }
  $sqlcc="SELECT CLIENT_COD FROM `client` ORDER BY CLIENT_COD DESC LIMIT 1";
 
  $resultat= $mysql->query($sqlcc);
  $fila=$resultat->fetch_array();
  $p=0;
  $resultat=$fila['CLIENT_COD']+1;
    if(isset($_REQUEST["deci"])){
        $_SESSION["codi"]=$_REQUEST["tria"];
        echo $_SESSION["codi"];
        if($_SESSION["codi"]==2){
            echo "<br>
            Codi producte:
            <br>
            <input type='number' name='producte' id=''  min='0'>
            <br>
            Descripció del producte:
            <br>
            <textarea name='descripcio' id='' cols='30' rows='10'></textarea>
            <br>
            ";
            
        }
        
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
       
        }
        
    }
    if(isset($_REQUEST["selecio"])){
      
      

        if($_SESSION["codi"]==1){
            echo $_SESSION["codi"];
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
    
    $mysql->query( $sqlp)or die($mysql->error);;

    }

 }
if(isset($_REQUEST['tornar']))
{
    session_destroy();
    header('Location:clients.php');
}

  ?>
    </form>

</body>

</html>
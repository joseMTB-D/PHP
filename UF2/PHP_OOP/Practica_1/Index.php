<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Index.php">
    ISBN del llibre:<br>
    <input type="text" name="ibn" id=""> <br>
    <br>
    Titol del llibre: <br>
    <input type="text" name="titol" id=""> <br>
    <br>
    Categoria: <br>
    <input type="text" name="categoria" id=""> <br>
    Preu: <br>
    <input type="number" name="preu" id="" min="0" step=0.01> <br>
    <br>
    Editorial: <br>
    <input type="text" name="editorial" id=""> <br>
    <br>
    Autor: <br>
    <input type="text" name="autor" id=""> <br>
    <br>
    <input type="submit" value="Insertar llibre" name="insert">
    <input type="submit" value="Actualitzar llibre" name="update">
    <?php
 include "Llibredao.php" ;
    if(isset($_REQUEST["insert"])){
        
    $libro = new llibre($_REQUEST['ibn'],$_REQUEST['titol'],$_REQUEST['categoria'],$_REQUEST['preu'],$_REQUEST['editorial'],$_REQUEST['autor']);
        $dao=new dao();
        $dao->insertar();
        
    }
    if(isset($_REQUEST["update"])){
        $dao=new dao();
        $dao->actualitzar();
    }
    ?>
    </form>
</body>
</html>
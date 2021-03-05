<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Penjat</title>
</head>
<body>
    <form action="Exercici2.php">
        Resposta:
       <input type="text" name="prova" id=""><br>
       <input type="submit" name="submit" value="Insertar"><br>
       <input type="submit" name="reset" value="Reset">
    </form>
    
    <?php
     session_Start();
    if(isset($_REQUEST["reset"])){
        session_destroy();
    }

    if(isset($_REQUEST["submit"])){
        $paraules=["hola","adeu","random","persona","penjat","full","ramon","portatil","pep","roda"];
        $lletra=$_REQUEST["prova"];
        if(isset($_SESSION["random"])){
            $_SESSION["lletresp"][]=$lletra;
          
            if(strpos($_SESSION["paraula"],$lletra )!==false){
              
            for ($i=0; $i <strlen($_SESSION["paraula"]) ; $i++) { 
               if($_SESSION["arrayp"][$i]==$lletra){
                   $_SESSION["guions"][$i]=$_SESSION["arrayp"][$i];
               }
            }
        }else{
            $_SESSION["intents"]--;
        } 
        echo "Lletres Provades: ";
        foreach($_SESSION["lletresp"] as $a){
            echo ", ".$a ;
        }
        echo "<br>";
        foreach($_SESSION["guions"] as $b){
            echo $b ." ";
        }
        echo "<br>";
        echo "Et queden : ".$_SESSION["intents"];
        if($_SESSION["guions"]==$_SESSION["arrayp"]){
           echo "<br>";
            echo "¡Has guanyat!";
            session_destroy();
        }
        if($_SESSION["intents"]==0){
            echo "<br>";
            echo "¡Has perdut!";
            session_destroy();
        }
            
           
           

        }else{
         
            $_SESSION["random"]= rand(0,9);
            $_SESSION["paraula"]=$paraules[$_SESSION["random"]];
            $_SESSION["lletresp"]=[];
           
            $_SESSION["arrayp"]=[];
           
            for ($i=0; $i <strlen($_SESSION["paraula"]) ; $i++) { 
                $_SESSION["guions"][]=" _ ";
                $_SESSION["arrayp"][]=$_SESSION["paraula"][$i];
            }
            $_SESSION["intents"]=10;
            $_SESSION["lletresp"][]=$lletra;
            if(strpos($_SESSION["paraula"],$lletra )!==false){
             
            for ($i=0; $i <strlen($_SESSION["paraula"]) ; $i++) { 
               if($_SESSION["arrayp"][$i]==$lletra){
                   $_SESSION["guions"][$i]=$_SESSION["arrayp"][$i];
               }
            }
        }else{
            $_SESSION["intents"]--;
        } 
        echo "Lletres Provades: ";
    
        foreach($_SESSION["lletresp"] as $a){
            echo ", ".$a ;
        }
        echo "<br>";
        foreach($_SESSION["guions"] as $b){
            echo $b ." ";
        }
        echo "<br>";
        echo "Et queden : ".$_SESSION["intents"];
           
        if($_SESSION["guions"]==$_SESSION["arrayp"]){
            echo "<br>";
             echo "¡Has guanyat!";
             session_destroy();
         }
         if($_SESSION["intents"]==0){
             echo "<br>";
             echo "¡Has perdut!";
             session_destroy();
         } 
            
           
            
        }
    }

 







    ?>
</body>
</html>
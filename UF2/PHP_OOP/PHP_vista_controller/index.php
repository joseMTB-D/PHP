<!Doctype html>
<?php
  require_once "config/parameters.php";
  require_once "autoload.php";
  require_once "config/database.php";
?>
<head>
  <title>Practica de control</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url?>assets/css/style.css">
</head>

<body>

  <!-- Header -->
  <div class="header">
    <h1>To Otako</h1>
    <p>El Agua<b> NO </b>hace daño.</p>
  </div>

  <!-- Navigation Bar -->
  <div class="navbar">
    <a href="http://localhost/PHP_vista_controller/llibre/mostrar">Mostrar llibres</a>
    <a href="index.php?controller=llibre&action=mostrarAfegir">Registrar</a>
    <a href="#">Shonen</a>
    <a href="#">Yuri</a>
  </div>

  <!-- The flexible grid (content) -->
  <div class="row">
    <div class="side">
      <h2>About Me</h2>

      <?php
    
      if (isset($_GET['controller'])) {

        $nom_controlador = $_GET['controller'] . "Controller";
        if($nom_controlador=="usuariController"){
        if (class_exists($nom_controlador)) {
          $controlador = new $nom_controlador();
          if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
            $action = $_GET['action'];
            $controlador->$action();
          } else {
            echo "No existeix el metode";
          }
        } else {
          echo "Error name controlador";
        }
      }
      }

      ?>
      <ul>
        <li><a href="index.php?controller=usuari&action=mostrarlogin" >Login</a></li>
        <li><a href="index.php?controller=usuari&action=mostrarregistrar ">registre</a></li>
      </ul>
     
      </ul>
    </div>
    <div class="main">
      <h2>Llibres</h2>
     
      
      <?php

            if (isset($_GET['controller'])) {
              
              $nom_controlador = $_GET['controller'] . "Controller";
              if($nom_controlador=="llibreController"){
              if (class_exists($nom_controlador)) {
                $controlador = new $nom_controlador();
                if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
                  $action = $_GET['action'];
                  $controlador->$action();
                } else {
                  echo "No existeix el metode";
                }
              } else {
                echo "Error name controlador";
              }
            }
            }

      ?>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <h2>Footer</h2>
  </div>

</body>

</html>
<html>

<head>
  <title>Practica de control</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <!-- Header -->
  <div class="header">
    <h1>To Otako</h1>
    <p>El Agua<b> NO </b>hace daño.</p>
  </div>

  <!-- Navigation Bar -->
  <div class="navbar">
    <a href="index.php?controller=espectacle&action=mostrar">Mostrar espectaculos</a>
    

  </div>

  <!-- The flexible grid (content) -->
  <div class="row">
    <div class="side">
      <h2>Invitat</h2>
      <?php
            require_once "autoload.php";
            if (isset($_GET['controller'])) {
              
              $nom_controlador = $_GET['controller'] . "Controller";
              if($nom_controlador=="invitatController"){
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
        <li><a href="index.php?controller=invitat&action=mostrarAfegir">Registrar invitados</a></li>
      </ul>
     
      </ul>
    </div>
    <div class="main">
      <h2>Espectacles</h2>
      <?php
      require_once "autoload.php";
      if (isset($_GET['controller'])) {

        $nom_controlador = $_GET['controller'] . "Controller";
        if($nom_controlador=="espectacleController"){
        if (class_exists($nom_controlador)) {
          echo $nom_controlador;
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
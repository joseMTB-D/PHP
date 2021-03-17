<!Doctype html>
<?php
require_once "config/parameters.php";
require_once "autoload.php";
require_once "config/database.php";
require_once "models/usuari.php";

?>

<head>
  <title>Practica de control</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url ?>assets/css/style.css">
</head>

<body>

  <?php
session_start();
  if((!isset($_SESSION["rol"]))){
  echo "<div id='list'>"; 
  echo "<ul>
  <li><a href='http://localhost/PHP_vista_controller/usuari/mostrarlogin'>Login</a></li>
  <li><a href='http://localhost/PHP_vista_controller/usuari/mostrarregistrar '>registre</a></li>";
  echo "</ul>";
  echo "</div>"; 
  }
  if ((isset($_SESSION["rol"]))and($_SESSION["rol"]==1)) {
    echo "<div id='list'>"; 

    echo "<ul>";
    echo "<li><a href='http://localhost/PHP_vista_controller/usuari/Tencar_Sessio '>Tencar sessio</a></li>";
    echo "</ul>";
    echo "</div>"; 

  } 
   if ((isset($_SESSION["rol"]))and($_SESSION["rol"]==2)) {
    echo "<div id='list'>"; 

    echo "<ul>";
    echo "<li><a href='http://localhost/PHP_vista_controller/usuari/Tencar_Sessio '>Tencar sessio</a></li>";
    echo "</ul>";
    echo "</div>"; 

  } 
   if ((isset($_SESSION["rol"]))and($_SESSION["rol"]==3)) {
    echo "<div id='list'>"; 
    echo "<ul>";
    echo "<li><a href='http://localhost/PHP_vista_controller/usuari/Tencar_Sessio '>Tencar sessio</a></li>";
    echo "</ul>";
    echo "</div>"; 

  } 
  




  ?>


  <!-- Header -->
  <div class="header">
    <h1>To Otako</h1>
    <p>El Agua<b> NO </b>hace daño.</p>
  </div>
  <?php
  if (((isset($_SESSION["rol"]))and($_SESSION["rol"]==3))) {
    echo "
    <!-- Navigation Bar -->
    <div class='navbar'>
      <a href='http://localhost/PHP_vista_controller/llibre/mostrarUser'>Mostrar Llibres</a>
      </ul>
    </div>
      ";
    echo  "<!-- The flexible grid (content) -->
    <div class='row'>
      <div class='side'>
      
      ";

    if (isset($_GET['controller'])) {

      $nom_controlador = $_GET['controller'] . "Controller";
      if ($nom_controlador == "llibreController") {
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
    if (isset($_GET['controller'])) {

      $nom_controlador = $_GET['controller'] . 'Controller';
      if ($nom_controlador == 'usuariController') {
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
  } 
   if ((isset($_SESSION["rol"]))and($_SESSION["rol"]==2)) {
    echo "
    <!-- Navigation Bar -->
    <div class='navbar'>
    <a href='http://localhost/PHP_vista_controller/llibre/mostrarAdmin'>Mostrar Llibres</a>
    <a href='http://localhost/PHP_vista_controller/llibre/mostrarAfegir'>Afegir Llibre</a>
    <a href='http://localhost/PHP_vista_controller/prestec/mostrar'>Mostrar Prestecs</a>
    <a href='http://localhost/PHP_vista_controller/prestec/mostrarAfegir'>Afegir Prestec</a>
    <a href='http://localhost/PHP_vista_controller/usuari/mostrar'>Mostrar Usuaris</a>
   </div>

   <!-- The flexible grid (content) -->
    <div class='row'>
    <div class='side'>
    
    ";

    if (isset($_GET['controller'])) {

      $nom_controlador = $_GET['controller'] . 'Controller';
      if ($nom_controlador == 'usuariController') {
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


    echo "
     
      </ul>
    </div>
    <div class='main'>
    
      
     ";

    if (isset($_GET['controller'])) {

      $nom_controlador = $_GET['controller'] . "Controller";
      if ($nom_controlador == "llibreController") {
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
    if (isset($_GET['controller'])) {

      $nom_controlador = $_GET['controller'] . "Controller";

      if ($nom_controlador == "prestecController") {
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
  }
   if ((isset($_SESSION["rol"]))and($_SESSION["rol"]==1)) {
    echo "
            <!-- Navigation Bar -->
            <div class='navbar'>
              <a href='http://localhost/PHP_vista_controller/llibre/mostrarUser'>Mostrar Llibres</a>
              <a href='http://localhost/PHP_vista_controller/prestec/mostrarMeusUser'>Mostrar Prestecs</a>
              <a href='http://localhost/PHP_vista_controller/prestec/mostrarAfegirUsuari'>Afegir Prestec</a>
            </div>
          
            <!-- The flexible grid (content) -->
            <div class='row'>
              <div class='side'>
              
              ";

    if (isset($_GET['controller'])) {

      $nom_controlador = $_GET['controller'] . 'Controller';
      if ($nom_controlador == 'usuariController') {
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
  

    echo "
               
                </ul>
              </div>
              <div class='main'>
              
                
               ";

    if (isset($_GET['controller'])) {

      $nom_controlador = $_GET['controller'] . "Controller";
      if ($nom_controlador == "llibreController") {
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
    if (isset($_GET['controller'])) {

      $nom_controlador = $_GET['controller'] . "Controller";

      if ($nom_controlador == "prestecController") {
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
  }
  if((isset($_SESSION["rol"]))and($_SESSION["rol"]==0)){
    echo "
    <!-- Navigation Bar -->
    <div class='navbar'>
      <a href='http://localhost/PHP_vista_controller/llibre/mostrarUser'>Mostrar Llibres</a>
    </div>
  
    <!-- The flexible grid (content) -->
    <div class='row'>
      <div class='side'>
      
      ";
      
        if (isset($_GET['controller'])) {
  
          $nom_controlador = $_GET['controller'] . 'Controller';
          if($nom_controlador=='usuariController'){
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
  
       
      echo "
       
        </ul>
      </div>
      <div class='main'>
      
        
       ";
  
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
              if (isset($_GET['controller'])) {
                
                $nom_controlador = $_GET['controller'] . "Controller";
                
                if($nom_controlador=="prestecController"){
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
            


  
            }
            if((!isset($_SESSION["rol"]))){
              echo "
              <!-- Navigation Bar -->
              <div class='navbar'>
                <a href='http://localhost/PHP_vista_controller/llibre/mostrarUser'>Mostrar Llibres</a>
              </div>
            
              <!-- The flexible grid (content) -->
              <div class='row'>
                <div class='side'>
                
                ";
                
                  if (isset($_GET['controller'])) {
            
                    $nom_controlador = $_GET['controller'] . 'Controller';
                    if($nom_controlador=='usuariController'){
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
            
                 
                echo "
                 
                  </ul>
                </div>
                <div class='main'>
                
                  
                 ";
            
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
                        if (isset($_GET['controller'])) {
                          
                          $nom_controlador = $_GET['controller'] . "Controller";
                          
                          if($nom_controlador=="prestecController"){
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
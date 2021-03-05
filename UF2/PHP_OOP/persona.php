<?php
class Persona  {
    // Properties
    public $nom;
    public $DNI;
  
    // Methods
    function __construct($nom,$DNI){
$this->nom=$nom;
$this->DNI=$DNI;

    }

    function get_name() {
      return $this->nom;
    }
   
    function get_DNI() {
      return $this->DNI;
    }
    function get_curs(){
      return $this->curs;
    }
    public function __toString(){
    return  "my name is {$this->nom} and my DNI is {$this->DNI}";
    }
}
class profesor extends persona {
  public $escola;
  function __construct($nom,$DNI,$escola){
    $this->escola=$escola;
    $this->nom=$nom;
    $this->dni=$DNI;
  }
  function get_escola(){

    return $this->escola;
  }
  public function __toString(){
    return  "my name is {$this->nom} , my DNI is {$this->dni} and mi school is {$this->escola}";
    }
}
$p1= new profesor("llubes","24654654654X","la salle mollerussa");
echo $p1;
class Alumne extends persona {
  public $curs;
  function __construct($nom,$DNI,$curs){
    $this->curs=$curs;
    $this->nom=$nom;
    $this->dni=$DNI;
  }
  function get_curs(){

    return $this->curs;
  }
  public function __toString(){
    return  "my name is {$this->nom} , my DNI is {$this->dni} and mi school is {$this->curs}";
    }
}

$p1= new Alumne("jose","562564654x","DAM-2");
echo $p1->__toString();

?>

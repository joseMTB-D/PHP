
<?php
class Persona {
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
    public function __toString(){
    return  "my name is {$this->nom} and my DNI is {$this->DNI}";
    }
}
$p1= new persona("andreu","ARRIBA ESPAÑA");
echo $p1;
  
  
 



?>

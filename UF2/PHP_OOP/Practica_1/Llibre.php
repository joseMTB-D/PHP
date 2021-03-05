<?php
class llibre  {
    public $ISBN;
    public $Títol;
    public $Categoria;
    public $Preu;
    public $Editorial;
    public $Autor;

    function __construct($ISBN,$Títol,$Categoria,$Preu,$Editorial,$Autor){
        $this->isbn=$ISBN;
        $this->titol=$Títol;
        $this->categoria=$Categoria;
        $this->preu=$Preu;
        $this->editorial=$Editorial;
        $this->autor=$Autor;
        }
        //get
        function get_isbn(){
            return $this->isbn;
        }
        function get_titol(){
            return $this->titol;
        }
        function get_categoria(){
            return $this->categoria;
        }
        function get_preu(){
            return $this->preu;
        }
        function get_editorial(){
            return $this->editorial;
        }
        function get_autor(){
            return $this->autor;
        }
        //set
        function set_isbn($ISBN){
           $this->isbn=$ISBN;
        }
        function set_titol($Títol){
            $this->titol=$Títol;
        }
        function set_categoria($Categoria){
            $this->categoria=$Categoria;
        }        
        function set_preu($Preu){
            $this->preu=$Preu;
        }
        function set_editorial($Editorial){
            $this->editorial=$Editorial;
        }
        function set_autor($Autor){
            $this->autor=$Autor;
        }

}
<?php
  class Operacao{
    private $numero1;
    private $numero2;
    private $numero3;

    public function __set($atrib, $value){
      $this->$atrib = $value;
    } 

    public function __get($atrib){
        return $this->$atrib;
    }

    public function produto(){
      $produto = $this->numero1 * $this->numero2 * $this->numero3;
      return $produto;
    }

  }


  $multiplica = new Operacao();
  $multiplica->numero1 = 3;
  $multiplica->numero2 = 3;
  $multiplica->numero3 = 3;

  echo $multiplica->produto();

?>
<?php
declare(strict_types=1);
include_once('Persiste.php');
class Passageiro extends persist{
  public Pessoa $pessoa;
  static private $filename = 'passageiro.txt';
  
  public function __construct($pessoa) {
   $this->pessoa = $pessoa;   
  }

    static public function getFilename(){
    return get_called_class()::$filename;
  }

}
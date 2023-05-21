<?php
declare(strict_types=1);
include_once('Persiste.php');
class PassageiroVip extends Passageiro{
  static private $filename = 'passageiroVip.txt';
  
  public function __construct($passageiro) {
   $this->peassageiro = $passageiro;   
  }

  static public function getFilename() {
    return get_called_class()::$filename;
  }

}
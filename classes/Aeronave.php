<?php
declare(strict_types=1);
include_once('Persiste.php');
class Aeronave extends persist{
    private string $fabricante;
    private string $modelo;
    private int $capacidadePassageiros;
    private float $capacidadeCarga;
    private string $registro;
    private CiaAerea $proprietaria;
    static private $filename = 'aeronave.txt';
  
    public function __construct($fabricante, $modelo, $capacidadePassageiros, $capacidadeCarga, $registro, $proprietaria) {      
        $this->fabricante = $fabricante;
        $this->modelo = $modelo;
        $this->capacidadePassageiros = $capacidadePassageiros;
        $this->capacidadeCarga = $capacidadeCarga;
        if($this->setRegistro($registro)){
          $this->registro = $registro;
        }
        $this->proprietaria = $proprietaria;
    }
    
    static public function getFilename(){
      return get_called_class()::$filename;
    }
  
    public function getProprietaria() {
      return $this->proprietaria;
    }
    
    public function setProprietaria($proprietaria) {
      $this->proprietaria = $proprietaria;
    }
    
    public function getFabricante() {
      return $this->fabricante;
    }
    
    public function getModelo() {
      return $this->modelo;
    }
  
    public function getCapacidadePassageiros() {
      return $this->capacidadePassageiros;
    }
    
    public function getCapacidadeCarga() {
      return $this->capacidadeCarga;
    }
    
    public function getRegistro() {
      return $this->registro;
    }

    private function setRegistro($registro) {
      if (strlen($registro) != 6 || $registro[2] != '-') {  
        return false;
      }
      $prefixo = substr($registro, 0, 2);
      if ($prefixo != 'PT' && $prefixo != 'PR' && $prefixo != 'PP' && $prefixo != 'PS') {
          echo 'Aeronave não permitida para voos nacionais.';
          return false;
      }
      if (!ctype_upper($registro[0]) || !ctype_upper($registro[1])) {  
        return false;
      }
      if (!ctype_upper($registro[3]) || !ctype_upper($registro[4]) || !ctype_upper($registro[5])) {  
        return false;
      }
      return true;
  }

}


?>
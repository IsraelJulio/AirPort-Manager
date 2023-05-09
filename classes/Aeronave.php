<?php
include_once('Persiste.php');
class Aeronave extends persist{
    private String $fabricante;
    private String $modelo;
    private string $capacidadePassageiros;
    private string $capacidadeCarga;
    private String $registro;
    public CiaAerea $ciaAerea;
    static private $filename = 'aeronave.txt';
  
    public function __construct($fabricante, $modelo, $capacidadePass, $capacidadeCarga, $registro, $ciaAerea) {      
        $this->fabricante = $fabricante;
        $this->modelo = $modelo;
        $this->capacidadePassageiros = $capacidadePass;
        $this->capacidadeCarga = $capacidadeCarga;
        if($this->setRegistro($registro)){
          $this->$registro = $registro;
        };
        $this->ciaAerea = $ciaAerea;
    }
    
    static public function getFilename(){
      return get_called_class()::$filename;
    }
  
    public function getProprietaria() {
      return $this->ciaAerea;
    }
    
    public function setProprietaria(CiaAerea $ciaAerea) {
      $this->ciaAerea = $ciaAerea;
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
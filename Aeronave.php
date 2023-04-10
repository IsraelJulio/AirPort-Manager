<?php
class Aeronave {
    private $fabricante;
    private $modelo;
    private $capacidadePass;
    private $capacidadeCarga;
    private $registro;
    private $ciaAerea;
    private $proprietaria;
    
  public function __construct($fabricante, $modelo, $capacidadePass, $capacidadeCarga, $registro, $ciaAerea, $proprietaria) {
        $this->fabricante = $fabricante;
        $this->modelo = $modelo;
        $this->capacidadePassageiros = $capacidadePass;
        $this->capacidadeCarga = $capacidadeCarga;
        $this->setRegistro($registro);
        $this->ciaAerea = $ciaAerea;
        $this->proprietaria = $proprietaria
    }
    
  /* ToDo: Verificar se o registro da aeronave é válido  
           Cria função valida Aeronave
  */
  
    public function getProprietaria() {
        return $this->proprietaria;
    }
    
    public function setProprietaria($proprietaria) {
        $this->proprietaria = $proprietaria;
    }
    
    public function setRegistro($registro) {
            $this->registro = $registro;       
    }
    
    public function getFabricante() {
        return $this->fabricante;
    }
    
    public function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }
    
    public function getModelo() {
        return $this->modelo;
    }
    
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
    public function getCapacidadePassageiros() {
        return $this->capacidadePassageiros;
    }
    
    public function setCapacidadePassageiros($capacidadePass) {
        $this->capacidadePassageiros = $capacidadePass;
    }
    
    public function getCapacidadeCarga() {
        return $this->capacidadeCarga;
    }
    
    public function setCapacidadeCarga($capacidadeCarga) {
        $this->capacidadeCarga = $capacidadeCarga;
    }
    
    public function getRegistro() {
        return $this->registro;
    }
    
    public function getCompanhiaAerea() {
        return $this->$ciaAerea;
    }
    
    public function setCompanhiaAerea($companhiaAerea) {
        $this->$ciaAerea = $ciaAerea;
    }
}
?>
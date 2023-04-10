<?php

class Frequencia {
  
    const DIARIO = "Diário";
    const SEMANAL = "Semanal";

    private $tipo;
    private $dias;

    public function __construct($tipo, $dias) {
        $this->tipo = $tipo;
        $this->dias = $dias;
    }
    
    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo(){
      $this->tipo = $tipo;
    };

    public function getDias() {
        return $this->dias;
    }
  
    public function setDias(){
      $this->Dias = $Dias;
    };
  
  
}

?>

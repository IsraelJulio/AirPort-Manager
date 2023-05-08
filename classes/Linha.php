<?php
include_once('Persiste.php');
class Linha extends persist{

    private string $origem
    private string $destino
    private DateTime $horarioPartida;
    private Frequencia $frequencia;
    private DateTime $duracaoEstimada;
    private string $codLinha;
    private Aeronave $aeronave;
    static private $filename = 'linha.txt';

    public function __construct(str $origem, str $destino, datetime $horarioPartida, Frequencia $frequencia, datetime $duracaoEstimada, str $codLinha, Aeronave $aeronave, CiaAerea $ciaAerea) {
          $this->origem = $origem;
          $this->destino = $destino;
          $this->horarioPartida = $horarioPartida;
          $this->frequencia = $frequencia;
          $this->duracaoEstimada = $duracaoEstimada;
          $this->codLinha = $codLinha;
          $this->aeronave = $aeronave;
          $this->setAeronave($aeronave);
      }
  
    public function getOrigem($origem) {
        return $this->origem;
    }

    public function getDestino($destino) {
        return $this->destino;
    }
  
    public function getHorarioPartida($horarioPartida) {
        return $this->horarioPartida;
    }

    public function getDuracaoEstimada($duracaoEstimada) {
        return $this->duracaoEstimada;
    }

    public function getFrequencia($frequencia) {
        return $this->frequencia;
    }

    public function getCodLinha($codLinha){
      return $this->codLinha;
    }

    public function geraViagens($viagem) {
        $this->viagem = $viagem;
    }    
  
    public function getHorarioPartida($horarioPartida) {
        return $this->horarioPartida;
    }
  
    public function getFrequencia($frequencia) {
        return $this->frequencia;
    }
    
    public function getAeronave($aeronave) {
        return $this->aeronave;
    }

    public function setAeronave($aeronave) {
        $this->aeronave = $aeronave;
    }

    

    public function getCiaAerea($ciaAerea) {
        return $this->ciaAerea;
    }
  
}

?>
<?php

class Linha {

    private $horarioPartida;
    private $frequencia;
    private $duracaoEstimada;

  public function getHorarioPartida() {
        return $this->horarioPartida;
    }
    public function setHorarioPartida($horarioPartida) {
        $this->horarioPartida = $horarioPartida;
    }
    public function getFrequencia() {
        return $this->frequencia;
    }
    public function setFrequencia($frequencia) {
        $this->frequencia = $frequencia;
    }
    public function getDuracaoEstimada() {
        return $this->duracaoEstimada;
    }
    public function setDuracaoEstimada($duracaoEstimada) {
        $this->duracaoEstimada = $duracaoEstimada;
    }
}

/*
    $linha = new Linha();
    $linha->setHorarioPartida('10:00');
    $linha->setFrequencia(30);
    $linha->setDuracaoEstimada(120);
    
    echo "Horario de Partida: " . $linha->getHorarioPartida() . PHP_EOL;
  */

?>
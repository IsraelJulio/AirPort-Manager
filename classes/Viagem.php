<?php

class Viagem {
  private $linha;
  private $aeronave;
  private $horaPartida;
  private $horaChegada;
  protected $dataHora;

  public function __construct($linha, $aeronave, $horaPartida, $horaChegada, DateTime $dataHora) {
    $this->dataHora = $dataHora;
    $this->linha = $linha;
    $this->aeronave = $aeronave;
    $this->horaPartida = $horaPartida;
    $this->horaChegada = $horaChegada;
  }

  public function getYear() {
    return $this-> dataHora ->format ("Y");
  }
      
  public function getMonth() {
    return $this->dataHora->format("m");
          
  }

  public function getDay() {
    return $this-> dataHora ->format ("D");
  }

  public function getDataHora() {
        return $this->dataHora;
  }
  
  public function getLinha() {
    return $this->linha;
  }

  public function setLinha($linha) {
    $this->linha = $linha;
  }

  public function getAeronave() {
    return $this->aeronave;
  }

  public function setAeronave($aeronave) {
    $this->aeronave = $aeronave;
  }

  public function getHoraPartida() {
    return $this->horaPartida;
  }

  public function setHoraPartida($horaPartida) {
    $this->horaPartida = $horaPartida;
  }

  public function getHoraChegada() {
    return $this->horaChegada;
  }

  public function setHoraChegada($horaChegada) {
    $this->horaChegada = $horaChegada;
  }
  
}
/*
$dataHora = DateTime::createFromFormat('Y-m-d H:i:s', '2021-10-01 10:30:00');
$viagem = new Viagem('linha1', 'aeronave1', '10:30', '15:30', $dataHora);
echo "Hora Partida: " . $viagem->getDataHora()->format('Y-m-d H:i:s') . PHP_EOL;

echo "aeronave: " . $viagem->getAeronave() . PHP_EOL;
echo "Hora Partida: " . $viagem->getHoraPartida() . PHP_EOL;
*/
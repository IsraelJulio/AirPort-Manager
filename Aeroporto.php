<?php
class Aeroporto {
  private $origem;
  private $destino;
  private $sigla;
  private $cidade;
  private $estado;

  public function __construct($sigla, $cidade, $estado, $origem, $destino) {
    $this->origem = $origem;
    $this->destino = $destino;
    $this->sigla = $sigla;
    $this->cidade = $cidade;
    $this->estado = $estado;
  }

  public function getOrigem() {
        return $this->origem;
    }

  public function getDestino() {
        return $this->destino;
    }
  
  public function getSigla() {
    return $this->sigla;
  }

  public function setSigla($sigla) {
    $this->sigla = $sigla;
  }

  public function getCidade() {
    return $this->cidade;
  }

  public function getEstado() {
    return $this->estado;
  }

}

/* teste

$viagem = new Aeroporto("SP", "Sorocaba", "São Paulo", "São Paulo","Belo Horizonte");
echo "Origem: " . $viagem->getOrigem() . PHP_EOL; 
echo "Destino: " . $viagem->getDestino(); 

*/
?>
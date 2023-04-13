<?php
  include_once('Persiste.php');
  class CiaAerea extends persist{
      private $nome;
      private $codigo;
      private $razaoSocial;
      private $cnpj;
      private $sigla;
      static private $filename = 'cia.txt';
      
      public function __construct($nome, $codigo, $razaoSocial, $cnpj, $sigla) {
          $this->nome = $nome;
          $this->codigo = $codigo;
          $this->razaoSocial = $razaoSocial;
          $this->cnpj = $cnpj;
          $this->sigla = $sigla;
      }

      static public function getFilename(){
        return get_called_class()::$filename;
      }
      
      public function getNome() {
          return $this->nome;
      }

      public function getCodigo() {
          return $this->codigo;
      }
      
      public function getRazaoSocial() {
          return $this->razaoSocial;
      }

      public function getCnpj() {
          return $this->cnpj;
      }

      public function getSigla() {
          return $this->sigla;
      }

  }

/*
$viagem = new CiaAerea('AZUL', '010', 'Azul Companhia Aerea', '00.132.456.009-10', 'AZL');
echo "Companhia Aerea: " . $viagem->getNome() . PHP_EOL; 
echo "Destino: " . $viagem->getCnpj(); 
*/


?>
<?php
  declare(strict_types=1);
  include_once('Persiste.php');
  class CiaAerea extends persist{
      private string $nome;
      private string $razaoSocial;
      private string $cnpj;
      private string $sigla;
      private float $precoBagagem;
      static private $filename = 'cia.txt';
      
      public function __construct($nome, $razaoSocial, $cnpj, $sigla, $precoBagagem) {
          $this->nome = $nome;
          $this->razaoSocial = $razaoSocial;
          $this->cnpj = $cnpj;
          $this->sigla = $sigla;
        
          $this->setPrecoBagagem($precoBagagem);
      }

      static public function getFilename(){
        return get_called_class()::$filename;
      }
      
      public function getNome() {
          return $this->nome;
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
    
      private function setSigla($sigla) {
        // $pattern = "/^[A-Z]{2}$/";
        // // $sigla = stringtoupper($sigla);
        // if (preg_match($pattern, $sigla) != 1){
        //   throw new Exception('Sigla inválida');
        // }
       $this->$sigla = $sigla;
      }

      public function getPrecoBagagem() {
        return $this->precoBagagem;
      }

      public function setPrecoBagagem($precoBagagem) {
        if($precoBagagem <= 0){
          throw new Exception("Preço da bagagem deve ser maior que 0.");
        }
        $this->precoBagagem = $precoBagagem;
      }

  }

?>
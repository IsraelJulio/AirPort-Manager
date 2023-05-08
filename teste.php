<?php
  include_once('global.php');

  $ciaT = new CiaAerea('Teste', 1, 'Testando', 'cnpj', 'TST');
  $ciaT->save();

  $aeronaveT = new Aeronave('fabricante', 'modelo', 'capacidadePass', 'capacidadeCarga', 'registro', $ciaT, 'proprietaria', 'codigo');
  $aeronaveT->save();

  $agora = date('Y-m-d H:i:s');

  $cliente = new Cliente('Israel', 'Jhonatas', 'meu RG', 123);
  $cliente->save();




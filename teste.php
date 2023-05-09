<?php
  include_once('global.php');

  $ciaAerea = new CiaAerea('Teste', '1b', 'Testando', 'CN', 3);
  $ciaAerea->save();
  //var_dump($ciaAerea);

  $aeronaveT = new Aeronave('fabricante', 'modelo', 3, 0, 'PT-RAE', $ciaAerea);
  $aeronaveT->save();
  // var_dump($aeronaveT);

  $nomeDaCia = $aeronaveT->ciaAerea->getNome();
  echo $nomeDaCia;
  

// $agora = date('Y-m-d H:i:s');

  // $cliente = new Cliente('Israel', 'Jhonatas', 'meu RG', 123);
  // $cliente->save();




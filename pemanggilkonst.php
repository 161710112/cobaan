<?php

require_once 'konstruktor.php';

  $robot1 = new robot('ngik ngik ngok',50,'transformer','kuning');

  $robot1 ->set_suara('ting tong',60,'optimus','merah&biru');
  echo 'bunyi robot  :'.$robot1->get_suara().''.'<br>';
  echo 'berat robot  :'.$robot1->get_berat().'kg'.'<br>';
  echo 'nama robot  :'.$robot1->get_nama().''.'<br>';
  echo 'warna robot  :'.$robot1->get_warna().'';
?>

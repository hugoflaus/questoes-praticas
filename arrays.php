<?php
$arraySigla = array('ES', 'MG', 'RJ', 'SP');
$arrayEstado = array('São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo');
$result = array_combine($arraySigla, array_reverse($arrayEstado));

foreach ($result as $key => $value) {
  echo($key. " - " . $value."\n");
}

?>
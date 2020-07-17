<?php
  function multiplos($multiplo1, $multiplo2, $limit){
    $soma = 0;
    for($numero = 0;$numero < $limit; $numero++){
      if($numero % $multiplo1 === 0 || $numero % $multiplo2 === 0){
        $soma += $numero;
      }
    }
    echo $soma;
  }

  multiplos(3,5,1000);

?>
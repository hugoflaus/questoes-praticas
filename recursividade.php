<?php
  function menorNumero($num){

    if(($num % 2 === 0) && ($num % 3 === 0) && ($num % 10 === 0))
      return $num;
    else
     return menorNumero($num+1);

   
  }

  echo menorNumero(1);
?>
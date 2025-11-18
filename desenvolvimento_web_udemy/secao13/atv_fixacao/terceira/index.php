<?php 
  $numeros = [];
  
  while(count($numeros) <= 5){
    $numero = rand(1, 60);
    if(!in_array($numero, $numeros)){
        $numeros[] = $numero;
    }
  }

  echo '<pre>';
  print_r($numeros);
  echo '</pre>';
?>
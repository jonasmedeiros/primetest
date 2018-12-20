<?php
  
  function primeNumber($n) {
      for ( $i = 2; $i <= ( sqrt( $n ) + 1); $i++) {
          if ( $n % $i == 0 && $n != $i ) {
              return false;
          }
      }
      return true;
  }

  $sum = 0;
  $current = 6;
  $max = 1000000;

  while (($sum + $current) < $max) {
      
      if (($sum + $current) > $max) {
          break;
      }
      
      if (primeNumber($current)) {
          $sum += $current;
      }

      $current++;
  }
  
  echo $sum;
?>
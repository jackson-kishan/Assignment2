<?php 

  /* 
   * write a PHP program that calculates and prints the first 10 fibonacci numbers.
   *  But, if a fibonacci number is greater than 100, break out of the loop using break statement.
   */

   $num1 = 0;
   $num2 = 1;
   $num3 = 1;

   /* for($i = 0; $i < 10; $i++){

     echo $num1 ." ";
     $num2 = $num3;
     $num3 = $num2 + $num1;
     $num1 = $num2;

     if($num1 > 100){
      break;
     }
   } */
   echo PHP_EOL;
   
  $i = 0;
   while( $i < 10){  
     
    echo $num1 . "  ";
    $num2 = $num3;
    $num3 = $num2 + $num1;
    $num1 = $num2;
  
    if($num1 > 100){
      break;
    }
      $i++;
     
   }

   



?>
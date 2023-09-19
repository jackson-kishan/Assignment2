<?php 

   /* 
    * Write a PHP function to print the first 15 numbers in the Fibonacci series.
    * You should take argument of a function and use a for loop to generate these numbers and print them by calling the Function.
    */


    
  function fibonacci($old, $new, $start, $end){
      if($start > $end) {
          return;
      } 

      $start++;
      echo $old . " ";
      $fib = $old + $new;
      $old = $new;
      $new = $fib;

        fibonacci($old, $new, $start, $end);
  }
  fibonacci(0, 1, 1, 15);








?>
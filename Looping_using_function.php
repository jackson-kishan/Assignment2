<?php


 /*
  * Write a PHP Function that uses a for loop to print all even Numbers form 1 to 20, but with a step 2 .
  * In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20.
  * The function should take arguments like start as 1, end as 20 and step as 2. 
  * You must call the function to print.
  * And do the same using while loop and do-while loop aslo. 
  */

 //Using for loop:
function isEven($start, $end)
{ 
    for ($i = $start; $i <= $end; $i++){
        if($i % 2 == 0) {
            echo $i . ' ';
        }   
    }
}
isEven(1,20);

echo PHP_EOL;
////////////////////////////////////////////////////////////////

 //Using While loop:
 function isEven1($start, $end)
 {

    $i = $start;
    while($i <= $end){
         $i++;
        if($i % 2 == 0) {
          echo $i . " ";
        }    
    }
 }
echo isEven1(1, 20);

echo PHP_EOL;
////////////////////////////////////////////////////////////////

 //Using Do-While loop:

  function isEven2($start, $end){

    $i = $start;
    do {
      $i++;
        if($i % 2 == 0) {
          echo $i. " ";  
        }
    } while ($i < $end);
  }

 isEven2(1, 20);

 



 // NOTE: It is not possible to print Even numbers in stepping by 2 

 function isEvenNumbersFor($start, $end, $step) {
  for ($i = $start; $i <= $end; $i += $step) {
      if ($i % 2 == 0) {
          echo $i . " ";
      }
      
  }
  echo "\n";
}

 isEvenNumbersFor(1, 20, 2);



?>
<?php
    // while loop example
    // $x = 1;
    // while($x <= 10){
    //     echo "The number is $x <br>";
    //     $x++;
    // }

    // while loop game
   $value = true;
   $number = 6;
   while($value){
       $randomNumber = rand(1,10);
       if ($randomNumber == $number) {
          echo "Winner You Have Checkin Dinner";
          break;
       }
       else{
           echo "You have got : $randomNumber <br>";
       }
   }

?>
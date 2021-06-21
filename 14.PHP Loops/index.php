<?php
    // while loop example
    // $x = 1;
    // while($x <= 10){
    //     echo "The number is $x <br>";
    //     $x++;
    // }

    // while loop game
//    $value = true;
//    $number = 6;
//    while($value){
//        $randomNumber = rand(1,10);
//        if ($randomNumber == $number) {
//           echo "Winner You Have Checkin Dinner";
//           break;
//        }
//        else{
//            echo "You have got : $randomNumber <br>";
//        }
//    }

    // print 0 to 100 number and always print step 10 
    // $number = 0;
    // while($number <= 100){
    //     echo "The number is $number <br>";
    //     $number+=10;
    // }

    // do...while loop
    // $number = 12;
    // do{
    //     echo "The number is $number <br>";
    //     $number++;
    // }while($number <= 10);

    // for loop

    // print 10 time hello
    // for ($i=0; $i <= 10 ; $i++) { 
    //    echo 'Hello <br>';
    // }

    // print 100 to 1
    // for ($i=100; $i >= 1 ; $i--) { 
    //     echo $i.'<br>';
    // }

    // print 1 to 100 odd number
    // for ($i=0; $i <= 100; $i++) { 
    //     if ($i % 2 == 1) {
    //         echo $i."<br>";
    //     }
    // }


    // break
    // for ($i=0; $i <= 10; $i++) { 
    //     if ($i == 4) {
    //         break;          
    //     }
    //     echo $i.'<br>';
    // }

    // continue
    for ($i=0; $i <= 10; $i++) { 
        if ($i == 4) {
            continue;          
        }
        echo $i.'<br>';
    }


?>
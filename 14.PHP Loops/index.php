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
    // for ($i=0; $i <= 10; $i++) { 
    //     if ($i == 4) {
    //         continue;          
    //     }
    //     echo $i.'<br>';
    // }

    // Nested for loop
    // 1
    // 12
    // 123
    // 1234
    // 12345

    // for ($i = 1; $i <= 5; $i++) { 
    //     for ($j=1; $j <= $i; $j++) { 
    //         echo $j;
    //     }
    //     echo '<br>';
    // }

    // 12345   
    // 1234
    // 123
    // 12
    // 1

    //  for ($i=5; $i >= 1; $i--) { 
    //     for ($j=1; $j <= $i; $j++) { 
    //         echo $j;
    //     }
    //     echo '<br>';
    // }

    // 1
    // 22
    // 333
    // 4444
    // 55555

    // for ($i = 1; $i <= 5; $i++) { 
    //     for ($j=1; $j <= $i; $j++) { 
    //         echo $i.' ';
    //     }
    //     echo '<br>';
    // }

    
    // 55555
    // 4444
    // 333
    // 22
    // 1

    // for ($i = 5; $i >= 1; $i--) { 
    //     for ($j=1; $j <= $i; $j++) { 
    //         echo $i;
    //     }
    //     echo '<br>';
    // }

    // *****
    // *****
    // *****
    // *****
    // *****

    // for ($i=1; $i <= 5; $i++) { 
    //     for ($j=1; $j <= 5; $j++) { 
    //         echo ' * ';
    //     }
    //     echo '<br>';
    // }

    // foreach loop with indexed array
    // $colors = array('red', 'green', 'orange', 'blue');
    // foreach($colors as $val){
    //     echo $val.'<br>';
    // }

    // foreach loop with associative array
    $cars = array(1 => 'Volvo', 2 => 'Ferrari', 3 => 'BMW');
    echo"<pre>";
        print_r(array_reverse($cars));
    echo"</pre>";
    foreach($cars as $key => $val){
       echo "$key : $val <br>";
    }

    




?>
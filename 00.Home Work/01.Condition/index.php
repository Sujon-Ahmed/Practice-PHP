<?php

   /*  // Program: 01 - speed in kmph checker program
    $speed = 80;
    if($speed <= 0){
        echo "Your Car is Stop";
    }
    elseif($speed < 60)
    {
        echo "Safe driving speed";
    }
    elseif($speed > 60 && $speed < 100)
    {
        echo "You are burning extra fuel";
    }
    else 
    {
        // when speed is greater than 100
        echo "Its dangerous";
    } */

    /* // Program : 02 - Even and Odd number checker with Positive, Negative Check
    $num = -2;
    if($num%2 == 0){
        echo "$num is Even number and, ";
    }else{
        echo "$num is Odd number and, ";
    }
    if($num > 0){
        echo " Positive !";
    }
    else{
        echo " Negative !";
    } */

    /* // Exam Result check program
    $number = 95;
    if ($number>100){
        echo "Error!";
    }
    elseif ($number>=80) {
        echo "You got 'A+'";	
    }
    elseif ($number>=70) {
        echo "You got 'A'";
    }
    elseif ($number>=60) {
        echo "You got 'A-'";
    }
    elseif ($number>=50) {
        echo "You got 'B'";
    }
    elseif ($number>=40) {
        echo "You got 'C'";
    }
    elseif ($number>=33) {
        echo "You got 'D'";
    }
    elseif ($number>=0) {
        echo "You're Fail";
    }
        else{
        echo "Error!";
    } */

    /* // Switch case 12 Month
    $month = 2;
	switch ($month) {
		case 1:
			echo "January month have 31 days.";
			break;
		case 2:
			echo "February month have 28 days.";
			break;
		case 3:
			echo "March month have 31 days.";
			break;
		case 4:
			echo "April month have 30 days.";
			break;
		case 5:
			echo "May month have 31 days.";
			break;
		case 6:
			echo "June month have 30 days.";
			break;
		case 7:
			echo "July month have 31 days.";
			break;
		case 8:
			echo "August month have 31 days.";
			break;
		case 9:
			echo "September month have 30 days";
			break;
		case 10:
			echo "October month have 31 days.";
			break;
		case 11:
			echo "November month have 30 days.";
			break;
		case 12:
			echo "December month have 31 days.";
			break;
		
		default:
			echo "There are no month.";
			break;
	} */

     /* // Month 
     $month = date("M");
     $year = 2021;
 
     if ($month == "Jan") {
         echo "There are 31 days in the month of January.";
     }
     elseif ($month == "Feb") {
         if ($year%4 == 0) {
             echo "This is leap year";
         }
         else{
             echo "This is not leap year";
         }
         echo "Then the month of February will be 29 days <br> Otherwise February month 28 days.";
     }
     elseif ($month == "Mar") {
         echo "There are 31 days in the month of March.";;
     }
     elseif ($month == "Apr") {
         echo "There are 30 days in the month of April.";
     }
     elseif ($month == "May") {
         echo "There are 31 days in the month of May.";
     }
     elseif ($month == "Jun") {
         echo "There are 30 days in the month of June.";
     }
     elseif ($month == "Jul") {
         echo "There are 31 days in the month of July.";
     }
     elseif ($month == "Aug") {
         echo "There are 31 days in the month of August.";
     }
     elseif ($month == "Sep") {
         echo "There are 30 days in the month of September.";
     }
     elseif ($month == "Oct") {
         echo "There are 31 days in the month of October.";
     }
     elseif ($month == "Nov") {
         echo "There are 30 days in the month of November.";
     }
     else{
         echo "There are 31 days in the month of December.";
     } */
     

   /*  // Exam Sit plan program 
    $classCom1 = "Com1";
    $classCom2 = "Com2";
    $Roll = 923364;

    if($Roll >=923341 && $Roll <= 923370){
        echo "Faridpur Polytechnic Institute <br>";
        echo "Your Board Roll Number : ".$Roll."<br>";
        echo "Exam Date : <br>";
        echo "Exam Time : <br>";
        echo "Room Number : ".$classCom1."<br>";
    }
    elseif($Roll >= 923275 && $Roll <= 923340){
        echo "Faridpur Polytechnic Institute <br>";
        echo "Your Board Roll Number : ".$Roll."<br>";
        echo "Exam Date : <br>";
        echo "Exam Time : <br>";
        echo "Room Number : ".$classCom2."<br>";
    }else{
        echo "Not Found";
    } */

   /*  // Leap year check
    $year = 2019;
    if($year%4 == 0){
        echo "This is leap year";
    }else{
        echo "This is not leap year";
    } */

    /* // Switch case Seven days program
    $day = date("D");
    switch ($day) {
        case "Sun":
           echo "Today is Sunday";
            break;
        case "Mon":
            echo "Today is Monday";
            break;
        case "Tue":
            echo "Today is Tuesday";
            break;
        case "Wed":
            echo "Today is Wednesday";
            break;
        case "Thu":
            echo "Today is Thursday";
            break;
        case "Fri":
            echo "Today is Friday";
            break;
        case "Sat":
            echo "Today is Saturday";
            break;
        
        default:
            echo "This is not day";
            break;
    } */

    // Login form with message
   /*  $User=$_POST['userName'];
    $Pass=$_POST['passWord'];
    // $userName = 'Sujon Ahmed';
    // $password = '12345678';
    if($User == 'admin' && $Pass == 'password'){
        echo 'Login Successful';
    }else{
        echo 'Try again';
    } */
?> 	
   
<!-- <body>
  // Login form with message
<form method="post" style="text-align:center;">
<hr>
Enter UserName : <input type="text" name="userName"/><br/><br>
Enter Password : <input type="password" name="passWord"/><br/><br>
	
<input type="submit" value="Login"/>
	
</form>

</body> -->

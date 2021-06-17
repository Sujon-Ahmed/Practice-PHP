<?php
    // strlen() - Return the Length of a String
    echo strlen("Hello_World!");
    echo "<br>";

    // str_word_count() - Count Words in a String
    echo str_word_count("This is my first paragraph");
    echo "<br>";

    // strrev() - Reverse a String
    echo strrev("reverse");
    echo "<br>";

    // strpos() - Search For a Text Within a String
    echo strpos("Hello World", "World");
    echo "<br>";

    // str_replace() - Replace Text Within a String
    echo str_replace("World", "Dolly", "Hello World");
    echo "<br>";

    echo trim(" Hello    World ");
    echo "<br>";

    $string = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi eaque ea doloribus voluptatem asperiores suscipit dolore. Velit officia excepturi vero, doloremque ex omnis deserunt ad reiciendis quae ratione. Commodi, soluta.";

    // echo $string;

    // $strcut = substr($string,0,30);

    // echo $strcut.'<a href="#">Read More</a>';

    // $valid =  trim($string);

    // if($valid != ''){
        
    // }

    // echo strtolower($string);
    // echo strtoupper($string);

    // $num  = 4525;

    // echo ucfirst($string);

    // echo ucwords($string);

    //$name = 'sujon';

    //existing variable check
    // if(isset($name)){
    //     echo 'set';
    // }else{
    //     echo 'unset';
    // }

    //existing value fill or not

    // if(empty($name)){
    //     echo 'unset';
    // }else{
    //     echo 'set';
    // }

    // echo $name;

    $txt = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam voluptas a cumque. Vero hic, est enim tenetur fugiat, porro sit omnis facere cumque odit vitae.";
    
    $strcut = substr($txt,0,50);
    echo $strcut.'<a href="#"> Read More...</a>';
    echo "<br>";
    
    // PHP Implode function
    $arr = ['Sujon ', 'Ahmed ', 'Riman '];
    $name = implode('+',$arr);
    echo $name;

    echo "<br>";

    // is_array function

    $city = ['Dhaka ', 'Chittagong ', 'Rajshahi ', 'Khulna ', 'Barishal', 'Sylet'];
    $checker = is_array($city);
    echo var_dump($checker);
    echo "<br>";

    $text = "hello there";
    $check = is_array($text);
    echo var_dump($check);
    echo "<br>";

    // array value count
    $array = ['1 ', '2 ', '3 ', '4 ', '5 '];
    echo count($array);

 


?>


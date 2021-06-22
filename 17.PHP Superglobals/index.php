<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }

    //     $x = 75;
    //     $y = 45;

    //     function addition(){
    //         $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    //     }
    //    addition();
    //    echo $z;

    // echo $_SERVER['PHP_SELF'];
?>

</body>
</html>
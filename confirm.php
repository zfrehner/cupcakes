<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap styles-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Thank You</title>
</head>
<body>

<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require("validate.php");

$isValid = true;

if (validName(trim($_POST['name']))) {
    $name = trim($_POST['name']);
} else {
    echo "<p>First name is required.</p>";
    $isValid = false;
}

if (validFlavor($_POST['cupcakes']) == false) {
    echo "<p>Stop Form Spoofing.</p>";
    $isValid = false;
} else {
    $flavor = $_POST['cupcakes'];
    //just in case
    $cupcakesString = implode(", ", $flavor);
}

if (empty($flavor)) {
    echo "<p>Please choose a flavor</p>";
    $isValid = false;
}

if($isValid) {
    echo "<h1>Thank you, $name, for your order!</h1>";
    echo "<h2>Summary:</h2>";
    echo "<ul>";
    foreach($flavor as $cake) {
        echo "<li>". $cake . "</li>";
    }
    echo "</ul>";

    //initialize variable to the number of elements in array and multiply by 3.50
    $total = count($flavor) * 3.50;
    //set the total so it will display the proper decimal places
    $total = number_format((float)$total,2,'.','');

    echo "<h3>Order Total: $$total</h3>";

}
?>

</body>
</html>
<!--Zach Frehner
4/15/2020
order form and total for ordering cupcakes
https://zfrehner.greenriverdev.com/328/cupcakes.php-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Bootstrap styles-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Cupcake</title>
</head>
<body>
<div class="container">
    <h1>Cupcake Fundraiser</h1>

        <form id="cupcakeForm" action="confirm.php" method="post">
        <fieldset class="form-group">
            <div class="form-group">
                <label for="name" >Name</label>
                <input type="text" placeholder="Please enter your name..." class="form-control" id="name" name="name">
                <span class="err" id="err-fname">Please enter your name</span>
            </div>
        </fieldset>

    <fieldset class="form-group">

        <legend>Cupcake Flavors</legend>
    <?php
    //turn on error reporting
    /*ini_set('display_errors', 1);
    error_reporting(E_ALL);*/

    $cupcakes = ['grasshopper'=> "The Grasshopper", 'maple'=>"Whiskey Maple Bacon", 'carrot'=>"Carrot Walnut", 'caramel'=>"Salted Caramel Cupcake",
                    'velvet'=>"Red Velvet", 'lemon'=>"Lemon Drop", 'tiramisu'=>"Tiramisu"];

    foreach($cupcakes as $cupcake => $flavor) {
        echo "<div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"cupcakes[]\" id=\"$cupcake\" value=\"$flavor\">
            <label class=\"form-check-label\" for=\"$cupcake\">
                $flavor
            </label>
        </div>";
    }
?>
        <button type="submit" class="btn btn-primary">Order</button>
        </form>





</div>
</body>
</html>

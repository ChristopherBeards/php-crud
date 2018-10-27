<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  
  <title>Custom Functions</title>
</head>
<body>

<?php
  // CUSTOM FUNCTIONS
  function saySomething() {
    echo "something";
  }

  saySomething();
?>

<div class="container">
  <h1><?php saySomething(); ?></h1>
</div>

<?php 
  // FUNCTIONS WITH PARAMETERS
  $myName = 'Chris';
  function passedParam($param) {
    echo "<h4>$param</h4>";
  }
?>
  
  <div class="container">
    <?php passedParam($myName); ?>
  </div>

<?php 
    // RETURN VALUES FROM FUNCTIONS
    function addNumbers($num1, $num2) {
      $sum = $num1 + $num2;

      return $sum;
    }

    $result = addNumbers(10, 10);
?>

  <div class="container">
    <h1> <?php echo $result ?> </h1>
  </div>

<?php 
  // SCOPE: Global, Local/Block

  // Global
  $x = "outside";

  function convertX() {
    // Local
    $x = "inside";
  }

  echo "<br> $x";

  convertX();

  echo "<br> $x";

  /* The output at this point will show that the local scope of the convert() 
  function does not affect the globally scoped variable */

  $y = "outside";

  function convertY() {
    // Reference the globally scoped `y` variable
    global $y;
    $y = "inside";
  }

  echo "<br> $y";

  convertY();

  echo "<br> $y";

  /* Because we declared that we wanted access to the globally scoped `y`,
  within our function we were able to modify it's value */
?>

<br>

<?php 
  // CONSTANTS
  $variable = "text";
  echo $variable;

  echo "<br>";

  define("NAME", "Pup!");
  echo NAME;
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>PHP: Math</title>
</head>
<body>
<div class="jumbotron">
  <div class="container" style="text-align: center">
    <h1>Operations</h1>
    <p>
      <?php 
        // Addition
        echo 1 + 1;
        echo "<br>";
        // Subtraction
        echo 1 - 1;
        echo "<br>";
        // Division
        echo 1 / 1;
        echo "<br>";
        // Multiplication
        echo 1 * 2;
        echo "<br>";
        // Modulus  
        echo 10 % 2;
        echo "<br>";
      ?>
    </p>
    <h1>Native Math Functions</h1>
    <?php 
      // BUILT-IN FUNCTIONS: There are more but this is a basic example
      echo pow(2, 7); // Calculates to the power of the second parameter
      echo "<br>";
      echo rand(1, 1000); // Generates a random number
      echo "<br>";
      echo sqrt(100); // Calculates the square root of the given parameter
      echo "<br>";
      echo ceil(4.6); // Rounds up to the nearest integer
      echo "<br>";
      echo floor(4.6); // Rounds down to the nearest integer
    ?>
  </div>
</div>
</body>
</html>
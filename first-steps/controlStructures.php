<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Control Structures</title>
  </head>
  
  <body>
    <h1 class="text-center">PHP: Control Structures</h1>

    <!--  IF STATEMENTS  -->
    <div class="container">
    <h4>If Statements</h4>
      <?php 
        // ---- IF STATEMENTS ----
        if(3 < 10) {
          echo '3 is less than 10';
        } else {
          echo 'Apparently 3 is not less than 10';
        };
      ?>
    </div>

    <!--  COMPARISON & LOGICAL OPERATORS  -->
    <div class="container">
    <h4>Comparison & Logical Operators</h4>
      <?php 
        // COMPARISON
        // equal ==
        // identical ===
        // compare > < >= <= <>
        // not equal !=
        // not identical !==

        // LOGICAL OPERATORS
        // and &&
        // or ||
        // not !
      ?>
    </div>

    <!--  SWITCH STATEMENTS  -->
    <div class="container">
    <h4>Switch Statements</h4>
      <?php 

        $four = 4;

        switch($four) {
          case 0:
            echo '0';
            break;
          case 1:
            echo '1';
            break;
          case 2: 
            echo '2';
            break;
          case 3:
            echo '3';
            break;
          case 4:
            echo '4';
            break;
          default:
            echo 'No numbers here!';
        };

      ?>
    </div>

        <!--  LOOPS  -->
        <div class="container">
    <h4>Loops</h4>
      <?php 
        // While Loops
        $num = 0;

        while($num < 10) {
          echo "<p style=\"text-align: center\">$num</p>";
          $num++;
        }

        // For Loop
        for ($i = 0; $i < 10; $i++) {
          echo $i;
        }

        // For Each
        $foreachArray = ["name", "location", "phone number"];

        foreach($foreachArray as $element) {
          echo "<p>$element</p>";
        }
      ?>
    </div>

  </body>
</html>

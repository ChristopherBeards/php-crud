<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Variables in PHP</title>
</head>
<body>

<?php 
  // Variables are case sensitive and are declared with a `$`
  // Strings: use back-ticks, single, or double quotes
  $stringName = 'Variable Data as a string';
  
  // Numbers: no quotes
  $number = 100;

  // With HTML
  $h1Heading = "<h3> PHP Variable Practice </h3>";
?>  

<?php echo $h1Heading ?>
<table style="width:50%; margin: auto;">
  <tr style="background-color: #F0EAD6;">
    <th>Strings</th>
    <th>Numbers</th> 
    <th>Data Manupulation</th> 
  </tr>
  <tr>
    <td><?= $stringName ?></td>
    <td><?php echo $number ?></td> 
    <td><?php echo $stringName . " " . $number ?></td>
  </tr>
</table>
    
</body>
</html>
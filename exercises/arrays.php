<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  
  <title>Arrays</title>
</head>
<body>

<?php 
  // Older Array Syntax
  $numberList = array(10, 20, 30, 40, 50, 'string', '<h1>html</h1>');

  // Newer Array Syntax
  $numberList2 = [];
?>

  <div class="container">
  <h2>Arrays</h2>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>HTML</th>
          <th>print_r</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td> <?php echo $numberList[6]; ?> </td>
          <td> <?php print_r($numberList); ?> </td>
        </tr>
      </tbody>
    </table>
  </div>

<?php 
// Associative Arrays: Used to assign keys to values in the array
$nameList = ["first_name" => "Chris"];

?>

<div class="container">
<h2>Associative Arrays</h2>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th><?php echo $nameList["first_name"]; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
<!-- Notes
If the property belongs to the class, use ::

If the property belongs to an instance of the class, use -> 
-->

<?php 
// Defining a class in PHP
class Car {
  function Type($brand) {
    echo $brand;
  }

}

if (class_exists("Car")) {
  echo "This class already exists!";
} else {
  echo "This class doesn't exist yet!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Classes</title>
</head>
<body>

<!-- Instantiate an instance of the car class -->
<?php 
  $bmw = new Car(); 
?>

<h1><?php echo $bmw::Type('BMW'); ?></h1>


</body>
</html>
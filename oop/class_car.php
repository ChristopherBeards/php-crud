<?php 
// Defining a class in PHP
class Car {

  function returnType() {
    echo "Saab 93";
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

<h1><?php echo  Car::returnType(); ?></h1>

</body>
</html>
<?php 

  # Object Oriented Style
  # Connecting to the DB
  $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));

  # Check if `save` has been pressed
  if (isset($_POST['save'])) {
    # Store the name and location in variables
    $name = $_POST['name'];
    $location = $_POST['location'];

    # Insert records into the DB
    $mysqli->query("INSERT INTO data (name, location) VALUES('$name', '$location')") or die($mysqli->error);
  }
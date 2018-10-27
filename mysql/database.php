<?php 
  // Connect to the database
  $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
  
  if (!$connection) {
    die("Error communicating with the database!");
  }
?>
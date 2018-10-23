<?php 

  # Object Oriented Style
  # Connecting to the DB
  $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
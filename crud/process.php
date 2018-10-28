<?php 

  # Session
  session_start();

  # Object Oriented Style
  # Connecting to the DB
  $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));

  # Set default form values
  $name = '';
  $location = '';
  $update = false;
  $id = null;

  # SAVE: Check if `save` has been pressed
  if (isset($_POST['save'])) {
    # Store the name and location in variables
    $name = $_POST['name'];
    $location = $_POST['location'];
    
    # Insert records into the DB
    $mysqli->query("INSERT INTO data (name, location) VALUES('$name', '$location')") or die($mysqli->error);

    # Session message
    $_SESSION['message'] = 'Record has been saved!';
    $_SESSION['msg_type'] = 'success';

    # Redirect
    header("location: index.php");
  }

  # DELETE: If `delete` has been pressed
  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysquli->error);

    # Session message
    $_SESSION['message'] = 'Record has been deleted!';
    $_SESSION['msg_type'] = 'danger';

    # Redirect
    header("location: index.php");
  }

  # UPDATE: if `update` has been pressed
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error);

    # Confirm that an element exists to be edited
    if ($result) {
      $row = $result->fetch_array();
      $name = $row['name'];
      $location = $row['location'];
    }
  }

  # UPDATE: updating values in the db
  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];

    $result = $mysqli->query("UPDATE data SET name='$name', location='$location' WHERE id=$id") or die($mysqli->error);

    # Set session messages
    $_SESSION['message'] = 'Record has been updated!';
    $_SESSION['msg_type'] = 'warning';

    # Redirect the user back to the index page
    header('location: index.php');
  }

  # Cancel update functionality
  if (isset($_POST['cancel'])) {
    # Redirect the user back to index.php
    header('location: index.php');
  }
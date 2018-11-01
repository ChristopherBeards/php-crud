<?php include "database.php";

// ----------------------
//  Create a user
// ----------------------
function createUser() {
  // Make the connection global
  global $connection;
  
  // Store data received from form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Create the insert for the query
  $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

  // Performs the query on the db
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Error communicating with the Database!');
  }
}


// ----------------------
//  Retreives user data
// ----------------------
function showUserData() {
  // Make the connection global
  global $connection;

  // Create a query to fetch the data
  $query = "SELECT * FROM users";

  // Performs the query on the db
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Error communicating with the Database!');
  }

  while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];

    echo "<option value='$id'>$id</option>";
  }
}


// ----------------------
//  Updates user table
// ----------------------
function updateTable() {
  // Make the connection global
  global $connection;

  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  $query = "UPDATE users SET 
            username = '$username', 
            password = '$password'
            WHERE id = $id";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query Failed " . mysqli_error($connection));
  }
}

// ----------------------
//  Delete rows
// ----------------------
function deleteRow() {
  // Make the connection global
  global $connection;

  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  $query = "DELETE FROM users
            WHERE id = $id";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query Failed " . mysqli_error($connection));
  }
}


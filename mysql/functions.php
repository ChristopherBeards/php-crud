<?php 
  include "database.php";
  // Retreives user data
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
?>
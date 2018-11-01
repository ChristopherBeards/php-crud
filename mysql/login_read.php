<?php 
  // Connect to the database
  include "database.php";
  
  // Create a query to fetch the data
  $query = "SELECT * FROM users";

  // Performs the query on the db
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Error communicating with the Database!');
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
  <body>

  <div class="container">
    <?php 
       while ($row = mysqli_fetch_assoc($result)) {
         $id = $row['id']; 
         echo "<h1>$id</h1>";
       } 
    ?>
  </div>
      
  </body>
</html>
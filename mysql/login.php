<?php 

if (isset($_POST['submit'])) {
  // Connect to the database
  $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
  
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  <title>Login App</title>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <a class="navbar-brand" href="#">Login App</a>
  </div>

  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <form class="navbar-form navbar-right" role="submit" method="post" action="login.php">
      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="username">
        <input type="text" class="form-control" name="password" placeholder="password">
      </div>
      <button type="submit" name="submit" class="btn btn-default">Login</button>
    </form>
    
  </body>
</html>
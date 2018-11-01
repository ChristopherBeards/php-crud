<?php 
  include "database.php";
  include "functions.php";
?>

<?php 
  if (isset($_POST['submit'])) {
      updateTable();
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
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <form class="navbar-form navbar-right" role="submit" method="post" action="login_update.php">
        <div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="username">
          <input type="text" class="form-control" name="password" placeholder="password">
        </div>

        <select name="id" style="height: 3rem; border-radius: 5px;">
          <?php showUserData(); ?>
        </select>

        <button type="submit" name="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
      
  </body>
</html>
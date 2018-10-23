<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>PHP Crud</title>
</head>

<body>

<?php require_once 'process.php'; ?>

<?php 
  # Connect to the DB
  $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));

  # Query the DB
  $result = $mysqli->query("SELECT * FROM data");

  ?>

  <div class="row justify-content-center">
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Location</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>

      <?php 
          while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td>
              <a href="index.php?edit=<?php echo $row['id']; ?>"
                class="btn btn-info">
                Edit              
              </a>
              <a href="process.php?edit=<?php echo $row['id']; ?>"
                class="btn btn-danger">
                Delete              
              </a>
            </td>
          </tr>
      <?php endwhile; ?>
      </table>
    </div>
  </div>

<?php   
  # A Function to print the data in a readable format
  function pre_r($array) {
    echo '<pre>';
    print_r($array);
    echo 'pre';
  }
  ?>

  <div class="container">
  <form action="process.php" method="POST">

    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" placeholder="Enter your name">
    </div>

    <div class="form-group">
     <label>Location</label>
      <input type="text" name="location" class="form-control" placeholder="Enter your location">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary" name="save">Save</button>
    </div>

  </form>
  </div>
</body>
</html>
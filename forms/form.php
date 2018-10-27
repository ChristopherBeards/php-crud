<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  
  <title>PHP: Forms</title>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
  <a class="navbar-brand" href="#">Working With Forms</a>
  <ul class="nav navbar-nav">
    <li class="active">
      <a href="#">Home</a>
    </li>
  </ul>
</nav>

<?php 
  // If a post action is triggered, store the form data in the variable
  if (isset($_POST['submit-name'])) {
    $inputData = $_POST['contact'];
  }
?>

<div class="container">
  <form action="form.php" id="contact-form" method="post" role="form">
    <legend>Contacts</legend> 
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control" name="contact" placeholder="Input field">
    </div>

    <button type="submit" name="submit-name" class="btn btn-primary">Submit</button>
  </form>
  <div style="margin-top: 20px; text-align: center;">
      <p style="font-size: 40px;">
        <?php
          echo (!empty($inputData) ? $inputData : null);
        ?>
      </p>
  </div>
</div>

<script type="text/javascript" src="form.php">
  document.getElementById("contact-form").addEventListener("click", function(event){
       event.preventDefault();
});
</script>
  
</body>
</html>


<!DOCTYPE html>

<?php

session_start();

$err =false;

if(isset($_SESSION['error']) && !empty($_SESSION['error'])){

    $err =$_SESSION['error'];
    unset($_SESSION['error']);

}


?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php if($err){ ?>
 <div class="alert alert-danger">
    <?php if(is_array($err) == true){  ?>
    <?php foreach($err as $key => $value){ ?>
    <?php echo $value; ?>
    <?php } ?>
    <?php } else{ ?>
    <?php echo $err; ?>
    <?php } ?>     
 </div>
 <?php } ?>

<div class="container">
  <h2></h2>
  <form method="post" action="./server_login.php">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

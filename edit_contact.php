<?php
include('./connection.php');

$id =$_GET['id'];

$error = false;
$success = false;

$query ="SELECT * FROM `contact` WHERE id=$id ";
$result =mysqli_query($connection,$query);
$row =mysqli_fetch_assoc($result);

$name =$row['name'];
$email =$row['email'];
$phone =$row['phone'];
$add =$row['address'];


if(isset($_SESSION['success']) && !empty($_SESSION['success'])){

  $success =$_SESSION['success'];
    unset($_SESSION['success']);

}

if(isset($_SESSION['error']) && !empty($_SESSION['error'])){

    $error =$_SESSION['error'];
    unset($_SESSION['error']);

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Navbar with Logo Image</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/style.js"></script>
</head>
<body>

<?php if($success){ ?>
    <div class ="alert alert-success">
     <p><?php echo $success; ?></p>   
    </div>
<?php } ?>

<?php if($error){ ?>
    <div class="alert alert-danger">
     <?php if(is_array($error) == true){ ?>
     <?php foreach($error as $key => $value){ ?>
     <p><?php echo $value; ?></p>
     <?php } ?>
     <?php } else{ ?>
     <p><?php echo $error; ?></p>
     <?php } ?>          
    </div>
 <?php } ?>   

<?php include('./navbar.php'); ?>

<div class="container">
  <h2>Edit form</h2>
  <form method="post" action="./edit_cserver.php">
  <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" value="<?php echo $name; ?>" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="<?php echo $email ?>" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="number" class="form-control" id="phone" value="<?php echo $phone; ?>" placeholder="Enter phone" name="phone">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" value="<?php echo $add; ?>" placeholder="Enter address" name="address">
    </div>
    <input type="hidden" id="name" name="id" value="<?php echo $row['id']; ?>">
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Edit</button>
  </form>
</div>

</body>
</html>

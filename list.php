<?php 

include('./connection.php');

$query =" SELECT COUNT(id) as total_count FROM `users`  ";
$result =mysqli_query($connection,$query);
$out ='';

while($row =mysqli_fetch_assoc($result)){

    $out = $row;
    $count =$row['total_count'];

}

$total_records = $count;

$limit = 4 ;

$total_page = $total_records / $limit;

$appr_value =ceil($total_page);

$current_page = 1;

if(isset($_GET['page']) && !empty($_GET['page'])){

  $current_page =$_GET['page'];

}

//echo $current_page;

$offset =($current_page - 1) * $limit;



$msg =false;
$error =false;

if(isset($_SESSION['error']) && !empty($_SESSION['error'])){

    $error =$_SESSION['error'];
    unset($_SESSION['error']);

}

if(isset($_SESSION['success']) && !empty($_SESSION['success'])){

    $msg =$_SESSION['success'];
    unset($_SESSION['success']);

}

$query =' SELECT * FROM users limit '.$limit.' offset '.$offset;
$result =mysqli_query($connection,$query);
$output =[];

while($row =mysqli_fetch_assoc($result)){

    $output[] =$row;

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

<?php if($msg){ ?>
    <div class="alert alert-success">
    <?php echo $msg; ?>    
    </div>
<?php } ?>

<?php if($error){ ?>
    <div class="alert alert-danger">
     <?php if(is_array($error) == true){ ?>
     <?php foreach($error as $key => $value){ ?>
     <p><?php echo $value; ?></p>
     <?php } ?>
     <?php } else{ ?>
     <p><?php echo $error;?></p>
     <?php } ?>         
    </div>
<?php } ?>    

<?php include('./navbar.php'); ?>


<div class="container">
  <h2>Users Table</h2>
  <p></p>            
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone</th>
        <th>Image</th>
        <th>Action</th>  
    </tr>
    </thead>
    <tbody>
    <?php foreach($output as $key => $value){ ?>
        <tr>
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['email'];?></td>
            <td><?php echo $value['password'];?></td>
            <td><?php echo $value['phone'];?></td>
            <td><?php echo $value['image'];?></td>
            <td><a href="http://localhost/assignment1/delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger" role="button">Delete</a></td>
            <td><a href="http://localhost/assignment1/edit.php?id=<?php echo $value['id']; ?>" class="btn btn-info" role="button">Edit</a></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
  <ul class="pagination">
  <?php for($i=1; $i<=$appr_value; $i++){ ?>
   
 <li><a type="button" class="btn btn-submit"  href="http://localhost/assignment1/list.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
 
 <?php  } ?>
 </ul>

</div>

</body>
</html>



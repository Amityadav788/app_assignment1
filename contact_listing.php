<?php

include('./connection.php');  

if(!isset($_SESSION['id'])){
  
  header("location:http://localhost/assignment1/login.php");
  exit;
}
 
$author_id =$_SESSION['id'];


$query =" SELECT COUNT(id) as total_count FROM `contact` WHERE author_id = $author_id ";
$result =mysqli_query($connection,$query);
$number ='';

while($row =mysqli_fetch_assoc($result)){

   $number = $row;

}

$totalRecords = $number['total_count']; 

$limit = 4 ; 

$page = $totalRecords / $limit ;

$approx =ceil($page);

$current_page = 1;

if(isset($_GET['page']) && !empty($_GET['page'])){
  $current_page = $_GET['page'];
}

//echo $current_page . "<br>";

$offset =($current_page-1) * $limit;


$query =' SELECT * FROM `contact` WHERE author_id ='.$author_id.' limit '.$limit.' OFFSET '.$offset; 
$result =mysqli_query($connection,$query);
$output =[];
$pagination = true;

if(isset($_SESSION['search_result'])){

  $output =$_SESSION['search_result'];
  $pagination = false;
  unset($_SESSION['search_result']);

} else{

  while($row =mysqli_fetch_assoc($result)){

    $output[] =$row;
  
  }

}




$error =false;
$success =false;
$value =false;

if(isset($_SESSION['success']) && !empty($_SESSION['success'])){

  $success =$_SESSION['success'];
  unset($_SESSION['success']);

}

if(isset($_SESSION['error']) && !empty($_SESSION['error'])){

  $error =$_SESSION['error'];
  unset($_SESSION['error']);

}

if(isset($_SESSION['search']) && !empty($_SESSION['search'])){

  $value =$_SESSION['search'];
  unset($_SESSION['search']);

}




?>
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


<?php if($success == true){ ?>
  <div class="alert alert-success">
    <p><?php echo $success; ?>
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

<?php  include('./navbar.php'); ?>

<nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="./search_server.php" method="post">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" value="<?php echo $value; ?>" aria-label="Search" >
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>

  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Action</th>
        <th>Edit</th>
     </tr>
    </thead>
    <tbody>
        <?php foreach($output as $key => $value){ ?>
        <tr>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['phone']; ?></td>
            <td><?php echo $value['address']; ?></td>
            <td><a href="http://localhost/assignment1/delete_contact.php?id=<?php echo $value['id'] ;?>" class="btn btn-danger" role="button">Delete</a></td>
            <td><a href="http://localhost/assignment1/edit_contact.php?id=<?php echo $value['id'] ;?>" class="btn btn-info" role="button">Edit</a></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
  <?php if($pagination){ ?>
  <ul class="pagination">
  <?php for($i=1; $i<=$approx; $i++){ ?>
   
 <li><a type="button" class="btn btn-submit"  href="http://localhost/assignment1/contact_listing.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
 
 <?php  } ?>
 </ul>
 <?php } ?>
  
</div>

</body>
</html>
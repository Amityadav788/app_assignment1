<?php 

include('./connection.php');

$author_id =$_SESSION['id'];

$query =" SELECT COUNT(id) as total_count FROM `contact` WHERE author_id=$author_id ";
$result =mysqli_query($connection,$query);
$out ='';

while($row =mysqli_fetch_assoc($result)){

    $out =$row;
    $count =$row['total_count'];


}

$query =" SELECT COUNT(id) as total_count FROM `users`  ";
$result =mysqli_query($connection,$query);
$users ='';

while($row =mysqli_fetch_assoc($result)){

    $users = $row;
    $count_user =$row['total_count'];
    
}

$total_records = $count_user;





?>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/assignment1/add.php">Registration Portal</a>
      <a class="navbar-brand" href="http://localhost/assignment1/contact_listing.php">List(<?php echo $count; ?>)</a>
      <a class="navbar-brand" href="http://localhost/assignment1/list.php">Users list(<?php echo $count_user; ?>)</a>
      <a class="navbar-brand" href="http://localhost/assignment1/login.php">Add contact</a>
    </div>
    <ul class="nav navbar-nav">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
       
         
      </div>
   
      <li class="navbar-brand"><a href="http://localhost/assignment1/logout.php">Logout</a></li>
    </ul>
  </div>
</nav> 
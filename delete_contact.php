<?php


include('./connection.php');

$id =$_GET['id'];

$query =" DELETE FROM contact WHERE id=$id ";
$result =mysqli_query($connection,$query);

if($result == true){

    $_SESSION['success'] ='Form deleted successfully';

} else{

    $_SESSION['error'] ='Not deleted';
}

header("location:http://localhost/assignment1/contact_listing.php");
exit;



?>
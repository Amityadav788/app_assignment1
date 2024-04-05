<?php 

include('./connection.php');

$name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$add =$_POST['address'];
$id =$_POST['id'];


$required_fields =['name', 'email', 'phone', 'address'];

$error = [];

foreach($required_fields as $key => $value){

    if(!isset($_POST[$value]) || empty($_POST[$value])){

        $error[] = $value. " is required ";

    }
}


if(count($error) == 0){
   
    $query = "UPDATE `contact` SET `name`= '$name', `email`= '$email', `phone`= '$phone', `address`= '$add' WHERE id = $id ";
    $result =mysqli_query($connection,$query);

    if($result){
      $_SESSION['success'] ='Record edited successfully';
    }

} else{

    $_SESSION['error'] = $error;

}

header("location:http://localhost/assignment1/edit_contact.php?id=".$id);
exit;



?>
<?php


include('./connection.php');

$error =[];




$req =['name', 'email', 'password', 'phone'];

foreach($req as $key => $value){

    if(isset($_POST[$value]) && empty($_POST[$value])){

        $error[] =$value. " is required ";
    }
}


if(count($error) == 0){

    $name =$_POST['name'];
    $email =$_POST['email'];
    $pass =$_POST['password'];
    $phone =$_POST['phone'];
    $id =$_POST['id'];

    $query =" UPDATE `users` SET `name` = '$name', `email` = '$email', `password` = '$pass', `phone` = '$phone' WHERE id = $id ";
    $result =mysqli_query($connection,$query);
    $_SESSION['success'] ='Record edited successfully';
    

} else{

    $_SESSION['error'] =$error ;

}

header("location:http://localhost/assignment1/edit.php?id=".$id);
exit;

?>
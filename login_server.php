<?php 



include('./connection.php');

$error =[];
$url ='';

$req =['email', 'password'];

foreach($req as $key => $value){

    if(isset($_POST[$value]) &&  empty($_POST[$value])){

        $error[] =$value. " is required ";
    }
}

if(count($error) == 0){

     $_SESSION['success'] =' request is valid ';

     $email =$_POST['email'];
     $pass =$_POST['password'];

     $query =" SELECT * FROM `users` WHERE `email`='$email' AND `password`='$pass' ";
     $result =mysqli_query($connection,$query);
     $row =mysqli_fetch_assoc($result);
     $_SESSION['id'] =$row['id'];
     $url ="http://localhost/assignment1/home.php";
    
} else{

    $_SESSION['error'] =$error;
    $url ="http://localhost/assignment1/login.php";
    
}

header("location:".$url);
exit;


?>
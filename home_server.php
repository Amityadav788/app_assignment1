<?php



include('./connection.php');

if(!isset($_SESSION['id'])){

    header("location:http://localhost/assignment1/login.php");
    exit;
}

$error =[];

$req =['name', 'email', 'phone', 'address'];

foreach($req as $key => $value){

    if(isset($_POST[$value]) && empty($_POST[$value])){

        $error[] =$value. " is required ";

    }
}

if(count($error) == 0){

    $_SESSION['success'] ='form submitted successfully';

    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $address =$_POST['address'];
    $id =$_SESSION['id'];

    $query =" INSERT INTO contact (`name`, `email`, `phone`, `address`, `author_id` ) VALUES ('$name', '$email', '$phone', '$address', '$id' ) ";
    $result =mysqli_query($connection,$query);

} else{

    $_SESSION['error'] =$error;

}


header("location:http://localhost/assignment1/home.php");
exit;

?>




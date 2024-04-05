<?php

session_start();

$req =['username', 'password'];

$err =[];
$url ='';

foreach($req as $key => $value){

    if(empty($_POST[$value])){

        $err[] =$value. " is required <br>";

    }

}

if(count($err) == 0){

    $user ='admin';
    $pass ='0409';

    $username =$_POST['username'];
    $password =$_POST['password'];

    if($user == $username && $pass == $password){

        $_SESSION['s_admin'] = true;
        $url ="http://localhost/assignment1/admin/dashboard.php";

    } else{

        $_SESSION['error'] ='request is not valid';
        $url ="http://localhost/assignment1/admin/login.php";

    }


} else{

    $_SESSION['error'] = $err;
    $url ="http://localhost/assignment1/admin/login.php";
}

header("location:".$url);
exit;

?>
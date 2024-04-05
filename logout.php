<?php

session_start();
session_destroy();

header("location:http://localhost/assignment1/login.php");
exit;

?>
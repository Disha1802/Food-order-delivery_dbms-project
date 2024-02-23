<?php
//authorization - access control
//check whether the user is logged in or not

if(!isset($_SESSION['user'])){
    //user not logged in then redirect to login page
    $_SESSION['no-login'] = "<div style= 'color:red;' class='text-center'><b>Please login to access admin</b></div>";
    header('location:'.SITEURL.'admin/login.php');
}
?>
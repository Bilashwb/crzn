<?php 
session_start();
require('../../config/dbconfig.php');
    $uname=$_POST['uname'];
    $sql = "SELECT * FROM `customer` WHERE `email`='$uname' OR `phone`='$uname'";
    $result = $conn->query($sql);
    $rec=mysqli_fetch_array($result);
    $norec=mysqli_num_rows($result);
    if($norec!=1)
    {
        $_SESSION['logerr']="Invalid User Information";
        header('location:../../customer/forget.php');

    }
    else{
       
                $_SESSION['forgetmsg']="Password Reset Link Send to Email ";
                header('location:../../customer/forget.php');
       

    }

?>
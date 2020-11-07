<?php
session_start();
require('config.php');
if(isset($_POST['submit'])){
    $username = $_POST['adminUser'];
    $password = $_POST['adminPass'];

    $sql = "SELECT * FROM admin WHERE adminUser = '$username' and adminPass='$password'";
    $query = mysqli_query($conn,$sql);
    if($row = mysqli_num_rows($query)>0){
        if($row == 1){
            echo"login successful";
            $_SESSION['adminUser']=$username;
            header('location:adminmainpage.php');
        }
    }else{
        header('location:login.php');
        echo"login failed";
    }
}
?>
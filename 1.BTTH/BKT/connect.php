<?php
    $conn=mysqli_connect('localhost', 'root','','bkt');
    if($conn){
        mysqli_query($conn, "SET NAME 'utf8' ");
    }
    else
        die('ket noi that bai');
?>
<?php
require_once('connect.php');
if(isset($_POST['save']))
{   
          $mamon=$_POST['mamon'];
          $tenmon=$_POST['tenmon'];
          $mota=$_POST['mota'];
          $sql = "INSERT INTO danhsachmonhoc (`mamon`,`tenmon`,`mota`) 
          VALUES ('".$mamon."', '".$tenmon."', '".$mota."')";
          if (mysqli_query($conn, $sql)) {
            header('location: read.php');
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
          }
}
?>
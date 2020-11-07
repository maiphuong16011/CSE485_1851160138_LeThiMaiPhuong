<?php
require_once('connect.php');
$sql = "DELETE FROM danhsachmonhoc WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('location: read.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

?>
<?php
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    require('config.php');
    // 2. Khai bao Truy van
    $sql = "SELECT * FROM users WHERE department = '$id'";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    $users_arr = array();
    while($row = mysqli_fetch_assoc($result)){
        $userid = $row['id'];
        $name = $row['name'];
        $users_arr[] = array("id" => $userid, "name" => $name);
    }
    echo json_encode($users_arr);

?>
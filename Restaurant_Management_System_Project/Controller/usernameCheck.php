<?php
    $json = $_POST['json'];
    $data = json_decode($json, true);
    $username = $data['username'];

    require_once("../Model/db.php");
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){
        echo "taken";
    } else {
        echo "available";
    }
?>

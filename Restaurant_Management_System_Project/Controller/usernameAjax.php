<?php
require_once("../Model/usersModel.php");

if (isset($_POST['json'])) {
    $data = json_decode($_POST['json'], true);
    $username = $data['username'];

    $result = usernameCheck($username);

    if (mysqli_num_rows($result) > 0) {
        echo "taken";
    } else {
        echo "available";
    }
} else {
    echo "invalid";
}
?>

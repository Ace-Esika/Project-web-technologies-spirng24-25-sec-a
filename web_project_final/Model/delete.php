<?php
$con = mysqli_connect("127.0.0.1:3399", "root", "", "resturent_db");

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
  $id = mysqli_real_escape_string($con, $_POST['id']);
  $sql = "DELETE FROM user_info WHERE id='$id'";

  if (mysqli_query($con, $sql)) {
    echo "success";
  } else {
    echo "error";
  }
}

mysqli_close($con);
?>

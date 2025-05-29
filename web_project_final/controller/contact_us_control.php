<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $msg = isset($_POST['msg']) ? htmlspecialchars($_POST['msg']) : '';

      $con = mysqli_connect("127.0.0.1:3399", "root", "", "resturent_db");

            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO messages (sender_name, sender_email,message) VALUES
            ('$name', '$email', '$msg');";
            $obj = mysqli_query($con, $sql);
            if ($obj) {
                echo "alert('Data inserted successfully');";
               // header("Location: ../view/contact_us.php");
                //exit();
            } else {
                echo "alert('Error inserting data');";
            }
}
?>

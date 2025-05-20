<?php
session_start();

$error_msg = "";
$user_name = "";
$user_pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['password'] ;

    if ($user_name === "root" && $user_pass === "root") {
        $_SESSION['user_name'] = $user_name;
        $_SESSION['is_logged_in'] = true;
        header("Location: ../index.php");
        exit();
    } elseif ($user_name === "admin" && $user_pass === "admin") {
        $_SESSION['user_name'] = $user_name;
        $_SESSION['is_admin_logged_in'] = true;
        header("Location: ../view/admin_index.php");
        exit();
        
    } else {
        if (empty($user_name) || empty($user_pass)) {
            $error_msg = "Please fill in all fields";
        } else {
            $error_msg = "Invalid username or password";
        }
    }
}


include("login_view.php");
?>

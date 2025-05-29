<?php
session_start();
if(!isset($_SESSION['status'])){
    header("location: home.php");
    exit;
}

require_once("../Model/usersModel.php");

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_SESSION['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    if(!str_contains($email,"@") || !str_contains($email, ".") || str_contains($email," ")){
        echo "<script>alert('Please enter a valid email');
            window.location.href='../View/profile.php';
            </script>";exit;
    }

    if(!is_numeric($phone)){
        echo "<script>alert('Please enter a valid phone no');
            window.location.href='../View/profile.php';
            </script>";exit;
    }
    if($password != ""){
        $length = strlen($password);
        if($length<6){
            echo "<script>alert('Password must be greater than six characters.');
                window.location.href='../View/profile.php';
                </script>";exit;
    }

    }
    

    if(updateUser($username, $email, $phone, $password)){
        echo "<script>alert('Profile update successful');
            window.location.href='../View/profile.php';
            </script>";exit;
    }
    else{
        echo "<script>alert('Something went wrong please try again');
            window.location.href='../View/profile.php';
            </script>";exit;
    }
}
?>

<?php
    session_start();

    $password = $_POST['password'];
    $cPassword = $_POST['confirmPassword'];
    $email = $_SESSION['email'];

    $length = strlen($password);

    if($length<6){
        echo "<script>alert('Password should be more than 6 characters.');
        window.location.href='../View/setPassword.php';
        </script>";exit;
    }

    else if($password != $cPassword){
        echo "<script>alert('Password and Confirm Password should be same.');
        window.location.href='../View/setPassword.php';
        </script>";exit;
    }
    else{
        require_once("../Model/usersModel.php");

        if(updatePassword($password, $email)) {
            echo "<script>alert('Password have been updated.');
            window.location.href='../View/login.php';
            </script>";exit;
        } 
        else{
            echo "<script>alert('Something went wrong. Try again.');
            window.location.href='../View/login.php';
            </script>";exit;
        }  
    }

?>
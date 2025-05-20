<?php
    session_start();
    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if($username == "" || $password == ""){
            echo "null username/password!";
        }
        else if($username =="admin" &&  $password == "admin"){
            $_SESSION['status'] = true;
            header('location: ../View/adminDashboard.php');
        }
        else if($username =="user" &&  $password == "user"){
            $_SESSION['status'] = true;
            header('location: ../View/customerDashboard.php');
        }
        else if($username =="server" &&  $password == "server"){
            $_SESSION['status'] = true;
            header('location: ../View/serverDashboard.php');
        }
        else if($username =="chef" &&  $password == "chef"){
            $_SESSION['status'] = true;
            header('location: ../View/chef.php');
        }
        else{
            echo "invalid user!";
        }
    }
    else{
        echo "Invalid request! Please submit form!";
    }
?>
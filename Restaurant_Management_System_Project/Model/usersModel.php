<?php
    require_once("db.php");

    function usernameCheck($username) {
        global $con;
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function insertInfo($firstname, $lastname, $username, $email, $dob, $phone, $gender, $password) {
        global $con;
        $sql = "INSERT INTO users VALUES (NULL, '$firstname', '$lastname', '$username', '$email', '$dob', '$phone', '$gender', '$password', 'customer')";
        $result = mysqli_query($con, $sql);
        return $result;
    
    }

    function emailCheck($email) {
        global $con;
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function updatePassword($newPassword, $email){
        global $con;
        $sql = "UPDATE users 
        SET password = '$newPassword' 
        WHERE email='$email'";

        $result = mysqli_query($con, $sql);
        return $result;

    }

    function loginCheck($username, $password){
        global $con;
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function getUserbyUsername($username){
        global $con;
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        return mysqli_fetch_assoc($result);
    }

    function updateUser($username, $email, $phone, $password){
        global $con;
        if($password != ""){
            $sql = "UPDATE users SET email='$email', phone='$phone', password='$password' WHERE username='$username'";
        } 
        else {
            $sql = "UPDATE users SET email='$email', phone='$phone' WHERE username='$username'";
        }
        $result = mysqli_query($con, $sql);
        return mysqli_fetch_assoc($result);
    }


?>
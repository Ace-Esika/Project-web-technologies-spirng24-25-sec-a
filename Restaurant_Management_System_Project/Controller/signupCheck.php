<?php
    session_start();
    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $dob = $_POST['dob'];
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if($username == "" || $password == "" || $dob == "" || $firstname == "" || $lastname == "" || $email == "" || $phone == ""){
            echo "Please fill all the input box.";
        }
        else{
            header("location: ../View/login.php");
        }
?>
<?php
    }else{
        header("location: ../View/home.php");
    }
?>
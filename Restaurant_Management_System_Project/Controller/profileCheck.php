<?php
    session_start();
    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $dob = $_POST['dob'];
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if($username == "" || $dob == "" || $firstname == "" || $lastname == "" || $email == "" || $phone == ""){
            echo "Please fill all the input box.";
        }
        else{
            header("location: ../View/customerDashboard.php");
        }
?>
<?php
    }else{
        header("location: ../View/home.php");
    }
?>
<?php
    session_start();
    if(isset($_POST['submit1'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $dob = $_POST['dob'];
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];

        if($username == "" || $password == "" || $dob == "" || $firstname == "" || $lastname == "" || $email == "" || $phone == ""){
            echo "<script>alert('Please fill all the input box.');</script>";
        }
        else{
            require_once("../Model/db.php");

            $sql_check = "SELECT * FROM users WHERE username = '$username'";
            $result_check = mysqli_query($con, $sql_check);

            if(mysqli_num_rows($result_check) > 0){
                echo "<script>alert('Username already taken. Please choose another.'); window.location.href='../View/signup.php';</script>";
                exit;
            }
            else{
                $sql = "insert into users values(null, '$firstname','$lastname','$username', '$email','$dob','$phone','$gender','$password', 'customer')";

                if(mysqli_query($con, $sql)){
                    header("location: ../View/login.php");
                    exit;
                }
                else{
                    echo "<script>alert('DB error');</script>";
                }
            }
        }

            
?>
<?php
    }else{
        header("location: ../View/home.php");
    }
?>
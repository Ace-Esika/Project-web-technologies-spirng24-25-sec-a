<?php
    session_start();
    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if($username == "" || $password == ""){
            echo "<script>
            alert('null username/password!');
            window.location.href = '../View/login.php';
            </script>";
            exit;
        }
        else{
            require_once('../Model/db.php');
        
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($con, $sql);

            $row = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) > 0) {
                if($row['role'] == 'customer'){
                    $_SESSION['status'] = true;
                    header("location: ../View/CustomerDashboard.php");
                    exit;
                }
                else if($row['role'] == 'employee'){
                    $_SESSION['statusE'] = true;
                    header("location: ../View/server.php");
                    exit;
                }
                else if($row['role'] == 'admin'){
                    $_SESSION['statusA'] = true;
                    header("location: ../View/adminDashboard.php");
                    exit;
                }
                else{
                    echo "<script>
                    alert('wrong username and password');
                    window.location.href = '../View/login.php';
                    </script>";
                    exit;
                }

            }
            else{
                echo "<script>
                alert('wrong username and password');
                window.location.href = '../View/login.php';
                </script>";
                exit;
            }
        }
        
        
    }
    else{
        echo "Invalid request! Please submit form!";
    }
?>
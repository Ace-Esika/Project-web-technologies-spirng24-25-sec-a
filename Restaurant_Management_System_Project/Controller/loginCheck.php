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
            require_once('../Model/usersModel.php');
            
            $result = loginCheck($username, $password);

            $row = mysqli_fetch_assoc($result);

            if (mysqli_num_rows($result) > 0) {
                if($row['role'] == 'customer'){
                    $_SESSION['status'] = true;
                    setcookie('status','true',time()+3600, '/');
                    $_SESSION['username'] = $username;
                    header("location: ../View/CustomerDashboard.php");
                    exit;
                }
                else if($row['role'] == 'employee'){
                    $_SESSION['statusE'] = true;
                    setcookie('statusE','true',time()+3600, '/');
                    $_SESSION['username'] = $username;
                    header("location: ../View/employeeDashboard.php");
                    exit;
                }
                else if($row['role'] == 'admin'){
                    $_SESSION['username'] = $username;
                    $_SESSION['statusA'] = true;
                    setcookie('statusA','true',time()+3600, '/');
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
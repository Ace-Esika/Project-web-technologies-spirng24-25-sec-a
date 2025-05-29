<?php
    session_start();
    $email = trim($_POST['email']);
    $_SESSION['email'] = $email;

    require_once("../Model/usersModel.php");

    $result = emailCheck($email);
    if(mysqli_num_rows($result) > 0) {
        $_SESSION['forgetPass'] = true;
        header("location: ../View/setPassword.php");
        exit;
    } else {
        echo "<script>
                alert('E-mail doesn\'t exist.');
                window.location.href='../View/forgetPassword.php';
              </script>";
        exit;
    }
?>

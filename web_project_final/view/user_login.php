
<?php
//
        $error_msg = "";
        $is_logged_in = false;
        $is_admin = false ;
        session_start();
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user_name =$_POST['user_name'];
            $user_pass =$_POST['password'];
            $con = mysqli_connect("127.0.0.1:3399", "root", "", "resturent_db");
          if (!$con) {
               die("Connection failed: " . mysqli_connect_error());
           }  
            $sql = "SELECT * FROM user_info WHERE email='$user_name' AND password='$user_pass'";
            $obj = mysqli_query($con, $sql);
            if (mysqli_num_rows($obj) === 1) { 
                $row = mysqli_fetch_assoc($obj);
                if ($row['role'] === 'admin') {
                    $_SESSION['user_name'] = $user_name;
                    $_SESSION['user_pass'] = $user_pass;
                    $_SESSION['is_admin'] = true;
                    header("Location: admin_index.php");
                    exit();
                } elseif ($row['role'] === 'chef') {
                    $_SESSION['user_name'] = $user_name;
                    $_SESSION['user_pass'] = $user_pass;
                    $_SESSION['is_logged_in'] = true;
                    header("Location: KDS.php");
                    exit();
                }
                $_SESSION['user_name'] = $user_name;
                $_SESSION['user_pass'] = $user_pass;
                $_SESSION['is_logged_in'] = true;
                header("Location: ../index.php");
                exit();
            }else {
                if(empty($user_name) || empty($user_pass)){
                    $error_msg = "Please fill in all fields";
                }else{
                    $error_msg = "Invalid username or password";
                }
               // echo "<script>alert('user_name: $user_name, user_pass: $user_pass');</script>";
                //$error_msg = "Invalid username or password";
                
            }
            
            
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #00796b;
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background: rgba(255, 255, 255, 0.2); 
      backdrop-filter: blur(10px); 
      -webkit-backdrop-filter: blur(10px);
      border-radius: 10px;
      padding: 20px;
      width: 30%;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 400px;
      width: 400px;
    }

    .container input {
      margin: 10px;
      padding: 10px;
      width: 200px;
      border: none;
      border-radius: 5px;
    }

    #submit_btn {
      margin: 10px;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #004d40;
      color: white;
      cursor: pointer;
      width: 120px;
    }
    #registration_btn{
      
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #004d40;
      color: white;
      cursor: pointer;
      width: 120px;
    }
  </style>
</head>
<body>
    <form action="" method="POST">
  <div class="container">
  <img src="img/logo.png" alt="login logo" height="200px" width="200px" style="border-radius: 50%;">
      <input name="user_name" type="text" id="user_name" placeholder="email" value="<?php echo htmlspecialchars($user_name); ?>">
      <input name="password" type="password" id="user_password" placeholder="Password">
      <input type="submit" value="Login" id="submit_btn">
      <button type="button" id="registration_btn" onclick="registration()">Registration</button>
      <h5 id="err" style="color: white;"></h5>
    <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h5 style='color: white;'>$error_msg</h5>";
  }
?>
  </div>
</form>
  <script>
    function registration(){
      window.location.href = "sign_up.php";
    }
    /*
    function valid(){
        var user_name  = document.getElementById("user_name") ;
        var user_pass = document.getElementById("user_password") ;

        if(user_name.value==="root" && user_pass.value==="root"){
            window.location.href = "home.html";
        }else if(user_name.value==="admin" && user_pass.value==="admin"){
          window.location.href ="../admin/admin.html";
        }
        else {
            var ee = document.getElementById("err").innerHTML = "Invalid username or password";
        }
    }
        */
    
  </script>
</body>
</html>

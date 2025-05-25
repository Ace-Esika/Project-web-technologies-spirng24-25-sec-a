<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
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
      border-radius: 10px;
      padding: 20px;
      width: 400px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 400px;
    }

    .container input {
      margin: 10px;
      padding: 10px;
      width: 200px;
      border: none;
      border-radius: 5px;
    }

    #submit_btn, #registration_btn {
      margin: 10px;
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
  <form action="../control/login_control.php" method="POST">
    <div class="container">
      <img src="img/logo.png" alt="login logo" height="200px" width="200px" style="border-radius: 50%;">
      <input name="user_name" type="text" id="user_name" placeholder="User Name" value="<?php echo htmlspecialchars($user_name); ?>">
      <input name="password" type="password" id="user_password" placeholder="Password">
      <input type="submit" value="Login" id="submit_btn">
      <button type="button" id="registration_btn" onclick="registration()">Registration</button>
      <?php
        if (!empty($error_msg)) {
            echo "<h5 style='color: white;'>$error_msg</h5>";
        }
      ?>
    </div>
  </form>
  <script>
    function registration(){
      window.location.href = "registration.html";
    }
  </script>
</body>
</html>

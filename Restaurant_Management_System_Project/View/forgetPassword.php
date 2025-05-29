<?php
  session_start();
  if(isset($_SESSION['login'])){
?>

<!DOCTYPE html>
<html>
<head>
  <title>Forget Password</title>
  <link rel="stylesheet" href="forgetPassword.css">
</head>
<body>

  <div class="container">
    <h2>Forgot Password</h2>
    <form action="../Controller/forgetPasswordEmailCheck.php" method="post" onsubmit="return validate()">
      <input type="text" id="email" name="email" placeholder="Enter your email address">
      <div id="div1"></div><br>
      <input type="submit" name="submit" id="submit" value="Send">
    </form>
    <div id="info"></div>
  </div>
  <script src="../Controller/forgetPassword.js"></script>
</body>
</html>

<?php
  }else{
    header("location: login.php");
  }
?>
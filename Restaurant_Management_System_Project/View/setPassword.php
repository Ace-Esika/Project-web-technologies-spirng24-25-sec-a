<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Set Password</title>
  <link rel="stylesheet" href="setPassword.css">
</head>
<body>

  <div class="container">
    <h2>Set Your Password</h2>
    <form action="../Controller/forgetPasswordUpdate.php" method="post" onsubmit="return validatePassword()">
      <input type="password" name="password" id="password" placeholder="Enter password" required>
      <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password" required>
      <div id="div1"></div>
      <input type="submit" value="Set Password">
    </form>
    <div id="info"></div>
  </div>

  <script src="../Controller/setPassword.js"></script>

</body>
</html>

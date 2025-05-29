<?php
  session_start();
  if(isset($_SESSION['status']) || isset($_SESSION['statusE'])){
    require_once("../Model/usersModel.php");
    $user = getUserByUsername($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile</title>
  <link rel="stylesheet" href="profile.css">
</head>
<body>

  <button class="back-button" onclick="window.location.href='customerDashboard.php'">Back</button>
  <div class="container">
    <header>
      Profile
      
    </header>

    <form action="../Controller/updateProfile.php" method="post" id="profileForm">
      <div class="field">
        <label>First Name</label>
        <input type="text" value="<?= $user['firstname'] ?>" disabled>
      </div>

      <div class="field">
        <label>Last Name</label>
        <input type="text" value="<?= $user['lastname'] ?>" disabled>
      </div>

      <div class="field">
        <label>Username</label>
        <input type="text" name="username" id="username" value="<?= $user['username'] ?>" disabled>
      </div>

      <div class="field">
        <label>Email</label>
        <input type="email" name="email" id="email" value="<?= $user['email'] ?>" disabled>
      </div>

      <div class="field">
        <label>Phone</label>
        <input type="text" name="phone" id="phone" value="<?= $user['phone'] ?>" disabled>
      </div>

      <div class="field">
        <label id="pass" style="display: none;">New Password</label>
        <input type="password" name="password" id="password" value="" placeholder="Enter new password" disabled>
      </div>

      <div class="buttons">
        <button type="button" id="editBtn" onclick="enableEdit()">Edit</button>
        <input type="submit" value="Save Changes" id="saveBtn" style="display:none;">
      </div>
    </form>
  </div>

  <script>
    function enableEdit() {
      document.getElementById("email").disabled = false;
      document.getElementById("phone").disabled = false;
      document.getElementById("password").disabled = false;

      document.getElementById("editBtn").style.display = "none";
      document.getElementById("saveBtn").style.display = "inline-block";
      document.getElementById("password").style.display = 'block';
      document.getElementById("pass").style.display = 'block';
      
    }
  </script>

</body>
</html>
<?php
  } else {
    header("location: home.php");
  }
?>

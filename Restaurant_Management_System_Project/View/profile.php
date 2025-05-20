<?php
  session_start();
  if(isset($_SESSION['status'])){
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <link rel="stylesheet" href="profile.css">
</head>
<body>
  <div class="container">
    <div class="image-half"></div>
    <div class="text-half">
      <h1>Profile</h1>
      <form action= "../Controller/profileCheck.php" method= "post" id="profileForm">
        <div class="info" style="align-items: center;">
          <img id="profileImagePreview" src="images/profile.jpeg" alt="Profile Image" />
          <input type="file" id="profileImage" accept="image/*" disabled>
        </div>

        <div class="info">
          <label for="firstName">First Name</label>
          <input type="text" name="firstName" id="firstname" value="Dipto" disabled>
        </div>
        <div class="info">
          <label for="lastName">Last Name</label>
          <input type="text" name="lastName" id="lastname" value="Chakaraborty" disabled>
        </div>
        <div class="info">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" value="user" disabled>
        </div>
        <div class="info">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" value="22-46713-1@student.aiub.edu" disabled>
        </div>
        <div class="info">
          <label for="dob">Date of Birth</label>
          <input type="date"  name="dob" id="dob" value="2002-01-01" disabled>
        </div>
        <div class="info">
          <label for="phone">Phone No</label>
          <input type="tel" name="phone" id="phone" value="01712345678" disabled>
        </div>
        <div class="info">
          <label for="gender">Gender</label>
          <input type="text" id="gender" value="Male" disabled>
        </div>

        <div id="passwordSection" style="display: none;">
          <h2>Update Password</h2>
          <div class="info">
            <label for="currentPassword">Current Password</label>
            <input type="password" id="currentPassword" disabled>
          </div>
          <div class="info">
            <label for="newPassword">New Password</label>
            <input type="password" id="newPassword" disabled>
          </div>
          <div class="info">
            <label for="confirmPassword">Confirm New Password</label>
            <input type="password" id="confirmPassword" disabled>
          </div>
        </div>

        <div class="buttons">
          <button type="button" onclick="enableEditing()">Edit Information</button>
          <button type="submit" name="submit" id="saveBtn" onclick="return saveChanges()" style="display: none;">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
  <script src="../Controller/profile.js"></script>
</body>
</html>

<?php
  }else{
    header("location: home.php");
  }

?>

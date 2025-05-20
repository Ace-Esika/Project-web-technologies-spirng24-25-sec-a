<?php
  session_start();
  if(isset($_SESSION['status'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Chef Dashboard</title>
  <link rel="stylesheet" href="chef.css">
</head>
<body>
  <header>
    Chef Dashboard
  </header>

  <div class="container">
    <button class="profile-btn" onclick="window.location.href='employeeDashboard.php'">Profile</button>
    <!-- <button class="order-btn" onclick="window.location.href='chefDashboard.html'">Order Queue</button> -->
    <button class="order-btn" onclick="window.location.href='orderQueue.php'">Order Queue</button>

  </div>
</body>
</html>

<?php
  }else{
    header("location: home.php");
  }

?>

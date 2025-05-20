<?php
  session_start();
  if(isset($_SESSION['status'])){
?>

<!DOCTYPE html>
<html>
<head>
  <title>Server Dashboard</title>
  <link rel="stylesheet" href="server.css">
</head>
<body>
  <header>
    <h1>Server Dashboard</h1>
  </header>

  <div class="container">
    <div class="dashboard-buttons">
      <button class="pos-btn" onclick="window.location.href='payment.php'">POS Terminal</button>
      <button class="assign-btn" onclick="window.location.href='serverDashboard.php'">Assign Order</button>
      <button class="profile-btn" onclick="window.location.href='employeeDashboard.php'">Profile</button>
    </div>
  </div>
</body>
</html>

<?php
  }else{
    header("location: home.php");
  }

?>

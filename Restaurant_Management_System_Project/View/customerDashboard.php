<?php
  session_start();
  if(isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html>
<head>
  <title>Customer Dashboard</title>
  <link rel="stylesheet" href="customerDashboard.css">
</head>
<body>

  <header>Dashboard</header>

  <div class="dashboard-buttons">
    <button onclick="location.href='profile.php'">Profile</button>
    <button onclick="location.href='fooditem.php'">Food Item</button>
    <button onclick="location.href='reservation.php'">Reservation</button>
  </div>
</body>
</html>
<?php
  }else{
    header("location: home.php");
  }

?>

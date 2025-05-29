<?php
  session_start();
  if(isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Customer Dashboard</title>
  <link rel="stylesheet" href="customerDashboard.css">
</head>
<body>

  <div class="container">
    <header>Customer Dashboard</header>

    <div class="dashboard-buttons">
      <button onclick="location.href='profile.php'">
        <span>👤</span> Profile
      </button>
      <button onclick="location.href='fooditem.php'">
        <span>🍽️</span> Food Item
      </button>
      <button onclick="location.href='reservation.php'">
        <span>📅</span> Reservation
      </button>
    </div>
  </div>

</body>
</html>
<?php
  } else {
    header("location: home.php");
  }
?>

<?php
  session_start();
  if(isset($_SESSION['statusA'])){
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
    <header>Admin Dashboard</header>

    <div class="dashboard-buttons">
      <!-- <button onclick="location.href='employeeManagement.php'">
        <span>👤</span> Employee
      </button> -->
      <button onclick="location.href='foodManagement.php'">
        <span>🍽️</span> Food Item
      </button>
      <button onclick="location.href='reservationManagement.php'">
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

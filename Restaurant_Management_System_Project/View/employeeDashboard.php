<?php
  session_start();
  if(isset($_SESSION['statusE'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Dashboard</title>
  <link rel="stylesheet" href="customerDashboard.css">
</head>
<body>

  <div class="container">
    <header>Employee Dashboard</header>

    <div class="dashboard-buttons">
      <button onclick="location.href='profile.php'">
        <span>👤</span> Profile
      </button>
      <button onclick="location.href='posTerminal.php'">
        <span>📅</span> POS Terminal
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

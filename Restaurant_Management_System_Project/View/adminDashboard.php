<?php
  session_start();
  if(isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="adminDashboard.css">
</head>
<body>
  <header>Admin Dashboard</header>

  <div class="dashboard">
    <button onclick="location.href='employeeManagement.php'">Employee Management</button>
    <button onclick="location.href='foodAR.php'">Food Add/Remove</button>
  </div>
  <script src="../Controller/adminDashbaord.js"></script>
</body>
</html>

<?php
  }else{
    header("location: home.php");
  }

?>

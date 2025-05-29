<?php
  session_start();
  $_SESSION['home'] = true;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Restaurant Management System</title>
  <link rel="stylesheet" href="home.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
</head>
<body>

  <header class="hero">
    <div class="hero-overlay">
      <div class="hero-content">
        <h1>Welcome to Grillzilla Restaurant</h1>
        <p>Your all-in-one restaurant management solution.</p>
        <a href="login.php" class="btn">Get Started</a>
      </div>
    </div>
  </header>

</body>
</html>

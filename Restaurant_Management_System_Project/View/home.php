<?php
  session_start();
  $_SESSION['home'] = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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

  <section class="features">
    <h2>Why Choose Us?</h2>
    <div class="feature-boxes">
      <div class="feature">
        <h3>📦 Easy Order Management</h3>
        <p>Handle orders with just a few clicks. Track progress in real-time.</p>
      </div>
      <div class="feature">
        <h3>📊 Sales Reports</h3>
        <p>Analyze daily, weekly, or monthly performance with detailed insights.</p>
      </div>
      <div class="feature">
        <h3>👥 Staff Access Control</h3>
        <p>Set permissions and monitor activities for staff and kitchen roles.</p>
      </div>
    </div>
  </section>

  <section class="cta">
    <h2>Ready to Take Control?</h2>
    <p>Join now and transform the way your restaurant operates.</p>
    <!-- <a href="login.php" class="btn">Login to Dashboard</a> -->
  </section>

</body>
</html>

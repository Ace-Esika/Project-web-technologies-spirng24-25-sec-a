<?php
session_start();
if (!isset($_SESSION['status'])) {
  header("location: home.php");
  exit;
}

require_once('../Model/foodModel.php');

$result = foodView();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Food Menu</title>
  <link rel="stylesheet" href="foodItem.css">
</head>
<body>

<header>
  <button onclick="window.location.href='customerDashboard.php'" class="back-btn">← Back</button>
  <h1>Our Menu</h1>
</header>

<!-- <div class="filter-section">
  <select id="filter" onchange="filterMenu()">
    <option value="all">All</option>
    <option value="Vegan">Vegan</option>
    <option value="Non-vegan">Gluten-Free</option>
  </select>
</div> -->

<div class="menu-grid" id="menu">
  <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <form action="foodDetails.php" method="get">
      <button type="submit" name="id" value="<?php echo $row['id']; ?>" class="food-item">
        <img src="<?php echo 'images/'.$row['picture']; ?>" alt="<?php echo $row['name']; ?>">
        <div class="food-name"><?php echo $row['name']; ?></div>
      </button>
    </form>
  <?php } ?>
</div>

<script src="../Controller/foodItem.js"></script>

</body>
</html>

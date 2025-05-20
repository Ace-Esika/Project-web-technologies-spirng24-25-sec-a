
<?php
  session_start();
  if(isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html>
<head>
  <title>Food Menu</title>
  <link rel="stylesheet" href="foodItem.css">
</head>
<body>
  <header>
    <h1>Our Menu</h1>
  </header>

  <div class="filter-section">
    <select id="filter" onchange="filterMenu()">
      <option value="all">All</option>
      <option value="vegan">Vegan</option>
      <option value="gluten-free">Gluten-Free</option>
    </select>
  </div>

  <div class="menu-grid" id="menu">
    <div class="food-item" data-tag="vegan">
      <img src="images/salad.webp" alt="Salad">
      <div class="food-name">Fresh Salad</div>
    </div>
    <div class="food-item" data-tag="gluten-free">
      <img src="images/grilled-chicken.jpg" alt="Grilled Chicken">
      <div class="food-name">Grilled Chicken</div>
    </div>
    <div class="food-item" data-tag="vegan">
      <img src="images/burger.jpg" alt="Burger">
      <div class="food-name">Vegan Burger</div>
    </div>
    <div class="food-item" data-tag="gluten-free">
      <img src="images/tuna-steak.jpg" alt="tuna-Steak">
      <div class="food-name"> Tuna Steak</div>
    </div>
    <div class="food-item" data-tag="all">
      <img src="images/pizza.jpg" alt="Pizza">
      <div class="food-name">Pizza</div>
    </div>
    <div class="food-item" data-tag="gluten-free">
        <img src="images/chicken-burger.avif" alt="chicker burger">
        <div class="food-name">Chicken Burger</div>
      </div>
  </div>
  <script src="../Controller/foodItem.js"></script>
</body>
</html>

<?php
  }else{
    header("location: home.php");
  }

?>
<?php 
session_start();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ichuraku Kitchen</title>
  <link rel="stylesheet" href="view/index_style.css" />
</head>

<body>

  <?php include 'view/home_nav.php'; ?>
  <div class="hero">
    <div class="overlay">
      <h1>Welcome to Ichuraku Kitchen</h1>
      <p>Serving authentic flavors and unforgettable dining experiences.</p>
    </div>
  </div>


  <div class="content" style="background-image: url('view/img/watercolor-paper-texture.jpg');
    background-size: cover;
    background-position: center;">
    <h1>Popular Food Items</h1>
    <div style="display: flex;justify-content: center;">
      <div class="sec popular_food">
        <img src="view/img/Fresh_beef_burger_isolated_-1-removebg-preview.png" alt="" height="100px" width="100px">
        <p id="food_name">Cheese Burger</p>
        <p id="food_price">120 ৳</p>
      </div>
      <div class="sec popular_food">
        <img src="view/img/crispy-fried-chicken-wooden-cutting-board-removebg-preview.png" alt="" height="100px" width="150px">
        <p id="food_name">Fried Chiken</p>
        <p id="food_price">199 ৳</p>
      </div>

      <div class="sec popular_food">
        <img src="view/img/front-view-delicious-cheese-pizza-consists-olives-pepper-tomatoes-dark-surface-removebg-preview.png" alt="" height="100px" width="150px">
        <p id="food_name">Veg Pizza</p>
        <p id="food_price">299 ৳</p>
      </div>
      
    </div>
    
    
  </div>


  <footer>
    <img src="view/img/logo.png" alt="Ichuraku Kitchen Logo" />
    <h3>Ichuraku Kitchen</h3>
    <p>Serving traditional dishes with a modern twist. Come taste the difference today!</p>
  </footer>
</body>
</html>

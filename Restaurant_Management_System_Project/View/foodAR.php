<?php
  session_start();
  if(isset($_SESSION['status'])){
?>

<!DOCTYPE html>
<html>
<head>
  <title>Menu Edit</title>
  <link rel="stylesheet" href="foodAR.css">
</head>
<body>
  <header>
    <h1>Menu Editor</h1>
  </header>

  <div class="container">
    <h2>Add New Menu Item</h2>
    <form id="menuForm" onsubmit="return validate()">
      <input type="file" id="itemImage">
      <input type="text" id="itemName" placeholder="Item Name">
      <input type="text" id="itemPrice" placeholder="Price">
      <select id="itemTag">
        <option value="">Select Dietary Tag</option>
        <option value="vegan">Vegan</option>
        <option value="gluten-free">Gluten-Free</option>
      </select>
      <input type="submit" value="Add Item" id="submit">

    <div class="menu-list" id="menuList">
      <h2>Current Menu</h2>
      <div id="div4"></div>
    </div>
  </div>
  <script src="../Controller/foodAR.js"></script>  
</body>
</html>

<?php
  }else{
    header("location: home.php");
  }

?>

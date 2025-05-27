<?php
  session_start();
  if(isset($_SESSION['statusA'])){
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
    <form id="menuForm" method="post" action="../Model/foodAdd.php" onsubmit="return validate()">
      <input type="file" id="itemImage">
      <input type="text" name="itemName" id="itemName" placeholder="Item Name">
      <input type="text" name="itemPrice" id="itemPrice" placeholder="Price">
      <select name="category" id="itemTag">
        <option value="">Select Dietary Tag</option>
        <option value="vegan">Vegan</option>
        <option value="gluten-free">Gluten-Free</option>
      </select>
      <input type="submit" value="Add Item" id="submit">
    </form>

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

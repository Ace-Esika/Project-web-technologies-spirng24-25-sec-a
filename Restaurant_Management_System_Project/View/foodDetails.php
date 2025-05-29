<?php
  session_start();
  if(isset($_COOKIE['statusA']) && isset($_SESSION['statusA'])){

    $id = $_GET['id'];
    require_once('../Model/foodModel.php');
    $result = oneFoodDetails($id);
    $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $row['name']; ?> Details</title>
  <link rel="stylesheet" href="foodDetails.css">
</head>
<body>
  <div class="container">
  <h1><?php echo $row['name']; ?></h1>
  <img src="images/<?php echo $row['picture']; ?>" alt="<?php echo $row['name']; ?>">
  <p><strong>Price:</strong> <?php echo $row['price']; ?> BDT</p>
  <p><strong>Category:</strong> <?php echo $row['category']; ?></p>
  <p><strong>Seasonality:</strong> <?php echo $row['seasonality']; ?></p>
  <p><strong>Description:</strong> <?php echo $row['description']; ?></p>

  <a href="foodItem.php">Back to Menu</a>
</div>
</body>
</html>

<?php
  }else{
    header("location: home.php");
  }
?>

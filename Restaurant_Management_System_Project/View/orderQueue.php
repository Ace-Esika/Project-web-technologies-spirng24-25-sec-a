<?php
  session_start();
  if(isset($_SESSION['status'])){
?>

<!DOCTYPE html>
<html>
<head>
  <title>Chef Order Dashboard</title>
  <link rel="stylesheet" href="orderQueue.css">
  
</head>
<body>
  <header>
    <h1>Order Queue</h1>
  </header>

</body>
</html>

<?php
  }else{
    header("location: home.php");
  }

?>

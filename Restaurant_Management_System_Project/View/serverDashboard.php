<?php
  session_start();
  if(isset($_SESSION['status'])){
?>

<!DOCTYPE html>
<html>
<head>
  <title>Server Order Assignment</title>
  <link rel="stylesheet" href="serverDashboard.css">
</head>
<body>
  <header>
    <h1>Assign Order to Kitchen Station</h1>
  </header>

  <div class="container" onsubmit="return validate()">
    <form id="orderForm">
      <label for="table">Table Number</label>
      <input type="text" id="table" name="table">

      <label for="item">Order Item</label>
      <input type="text" id="item" name="item">

      <label for="station">Assign to Station</label>
      <select id="station" name="station">
        <option value="">Select Station</option>
        <option value="fry">Fry Station</option>
        <option value="grill">Grill Station</option>
        <option value="soup">Soup Station</option>
        <option value="pizza">Pizza Station</option>
      </select>

      <label for="notes">Special Instructions (Optional)</label>
      <textarea id="notes" name="notes" rows="3"></textarea>

      <input type="submit" id="submit" value="Send to Kitchen">
    </form>
    <div id="confirmation" style="margin-top: 1rem; font-weight: bold; color: green;"></div>
  </div>
  <script src="../Controller/serverDashboard.js"></script>

</body>
</html>

<?php
  }else{
    header("location: home.php");
  }

?>

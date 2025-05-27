<?php
  session_start();
  if(isset($_SESSION['statusE'])){
?>

<!DOCTYPE html>
<html>
<head>
  <title>POS Payment Processing</title>
  <link rel="stylesheet" href="payment.css">
</head>
<body>
  <div class="container">
    <h2>POS Payment Processing</h2>

    <div class="form-group">
      <label for="tableNo">Table Number</label>
      <input type="text" id="tableNo">
    </div>

    <div class="form-group">
      <label for="foodItems">Food Items Ordered (Format: Name - $Price x Quantity)</label>
      <textarea id="foodItems" rows="5" placeholder="e.g., Pizza - $30 x2"></textarea>
    </div>

    <div class="form-group">
      <label for="totalBill">Total Bill Amount ($)</label>
      <input type="text" id="totalBill" />
    </div>

    <div class="form-group">
      <label for="splitCount">Number of Guests (for split payment)</label>
      <input type="text" id="splitCount" value = "1" />
    </div>

    <div class="form-group">
      <label for="paymentMethod">Payment Method</label>
      <select id="paymentMethod">
        <option value="">Select one payment method</option>
        <option value="Cash">Cash</option>
        <option value="Credit Card">Credit Card</option>
        <option value="Mobile Payment">Mobile Payment</option>
      </select>
    </div>

    <button class="btn" onclick=" return processPayment()">Process Payment</button>
    <button class="btn" onclick="printReceipt()">Print Receipt</button>

    <div id="receipt"></div>
  </div>
  <script src="../Controller/payment.js"></script>
</body>
</html>

<?php
  }else{
    header("location: home.php");
  }

?>

<?php
  session_start();
  $_SESSION['reservation'] = true;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Reserve a Table - Grillzilla</title>
  <link rel="stylesheet" href="reservation.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
</head>
<body>
  <button class="back-button" onclick="window.location.href='customerDashboard.php'">Back</button>

  <div class="reservation-hero">
    <div class="overlay">
      <div class="form-container">
        <h1>Reserve a Table</h1>
        <form action="../Controller/reservationProcess.php" method="post" onsubmit="return validate()">
          <label for="name">Name</label>
          <input type="text" id="name" name="name">

          <label for="date">Date</label>
          <input type="date" id="date" name="date">

          <label for="start-time">Start Time</label>
          <div class="time-slot-group">
            <select name="start_hour">
              <?php for ($i = 1; $i <= 12; $i++) { echo "<option>$i</option>"; } ?>
            </select>
            <select name="start_minute">
              <option>00</option>
              <option>15</option>
              <option>30</option>
              <option>45</option>
            </select>
            <select name="start_ampm">
              <option>AM</option>
              <option>PM</option>
            </select>
          </div>

          <label for="end-time">End Time</label>
          <div class="time-slot-group">
            <select name="end_hour">
              <?php for ($i = 1; $i <= 12; $i++) { echo "<option>$i</option>"; } ?>
            </select>
            <select name="end_minute">
              <option>00</option>
              <option>15</option>
              <option>30</option>
              <option>45</option>
            </select>
            <select name="end_ampm">
              <option>AM</option>
              <option>PM</option>
            </select>
          </div>

          <label for="party_size">Party Size</label>
          <input type="number" id="party_size" name="party_size" min="1">

          <label for="email">Email</label>
          <input type="email" id="email" name="email">

          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone">

          <label for="special_request">Special Request</label>
          <textarea name="special_request" rows="3"></textarea>

          <input type="submit" value = "Submit Reservation">
        </form>
      </div>
    </div>
  </div>
  <script src="../Controller/reservation.js"></script>

</body>
</html>

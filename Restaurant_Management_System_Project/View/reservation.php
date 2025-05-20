<?php
  session_start();
  if(isset($_SESSION['status'])){
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reservation</title>
    <link rel="stylesheet" href="reservation.css">
</head>
<body>
  <div class="container">
    <div class="image-section">
      <div class="image-half top"></div>
      <div class="image-half bottom"></div>
    </div>
    <div class="form-section">
      <h2>Book a Reservation</h2>
      <form id="reservationForm" onsubmit="return submitReservation()">
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" id="date">
        </div>

        <div class="form-group">
          <label for="timeFrom">Time Slot</label>
          <div class="time-slot-container">
            <input type="time" id="timeFrom">
            <span>to</span>
            <input type="time" id="timeTo">
          </div>
        </div>

        <div class="form-group">
          <label for="partySize">Party Size</label>
          <input type="text" id="partySize" min="0">
        </div>

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name">
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="text" id="phone">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" id="email">
        </div>

        <div class="form-group">
          <label for="specialRequest">Special Request</label>
          <textarea id="specialRequest" rows="3"></textarea>
        </div>

        <button type="submit">Book Reservation</button>
        <div class="confirmation" id="confirmationMessage"></div>
      </form>
    </div>
  </div>
  <script src="../Controller/reservation.js"></script>
</body>
</html>

<?php
  }else{
    header("location: home.php");
  }

?>
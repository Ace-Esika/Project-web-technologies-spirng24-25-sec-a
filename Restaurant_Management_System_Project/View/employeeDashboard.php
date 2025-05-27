<?php
  session_start();
  if(isset($_SESSION['statusE'])){
?>

<!DOCTYPE html>
<html>
<head>
  <title>Employee Dashboard</title>
  <link rel="stylesheet" href="employeeDashboard.css">
</head>
<body>
  <h1>Employee Shift Management </h1>

  <section>
    <h2>Clock In / Clock Out</h2>
    <div>
      <button class="btn" id="clockInBtn" onclick=" return clockIn()">Clock In</button>
      <button class="btn" id="clockOutBtn" onclick="return clockOut()">Clock Out</button>
    </div>
    <div id="clockTimes" style="margin-top: 10px; font-weight: bold;"></div>
  </section>

  <section>
    <h2>Availability Tracker</h2>
    <form>
      <table>
        <thead>
          <tr>
            <th>Day</th>
            <th>Availability</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Monday</td><td><input type="text" value="9AM - 5PM" /></td></tr>
          <tr><td>Tuesday</td><td><input type="text" value="9AM - 5PM" /></td></tr>
          <tr><td>Wednesday</td><td><input type="text" value="9AM - 5PM" /></td></tr>
          <tr><td>Thursday</td><td><input type="text" value="9AM - 5PM" /></td></tr>
          <tr><td>Friday</td><td><input type="text" value="9AM - 3PM" /></td></tr>
          <tr><td>Saturday</td><td><input type="text" value="Off" /></td></tr>
          <tr><td>Sunday</td><td><input type="text" value="Off" /></td></tr>
        </tbody>
      </table>
      <button type="submit" class="btn">Save Availability</button>
    </form>
  </section>

  <section>
    <h2>Request Shift Change</h2>
    <form>
      <label for="reqDate">Date:</label><br />
      <input type="date" id="reqDate" name="reqDate" /><br /><br />

      <label for="currentShift">Current Shift:</label><br />
      <input type="text" id="currentShift" name="currentShift" value="9AM - 5PM" /><br /><br />

      <label for="desiredShift">Desired Shift:</label><br />
      <input type="text" id="desiredShift" name="desiredShift" /><br /><br />

      <button type="submit" class="btn">Submit Request</button>
    </form>
  </section>

  <section>
    <h2>Request Shift Swap</h2>
    <form>
      <label for="swapDate">Date:</label><br />
      <input type="date" id="swapDate" name="swapDate" /><br /><br />

      <label for="myShift">My Shift:</label><br />
      <input type="text" id="myShift" name="myShift" value="9AM - 5PM" /><br /><br />

      <label for="colleague">Swap With (Employee Name):</label><br />
      <input type="text" id="colleague" name="colleague" /><br /><br />

      <label for="colleagueShift">Colleague's Shift:</label><br />
      <input type="text" id="colleagueShift" name="colleagueShift" /><br /><br />

      <label for="reason">Reason (Optional):</label><br />
      <input type="text" id="reason" name="reason" /><br /><br />

      <button type="submit" class="btn">Submit Swap Request</button>
    </form>
  </section>

  <script src="../Controller/employeeDashboard.js"></script>
</body>
</html>

<?php
  }else{
    header("location: home.php");
  }

?>

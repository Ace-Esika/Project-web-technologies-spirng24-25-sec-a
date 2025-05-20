<?php
  session_start();
  if(isset($_SESSION['status'])){
?>

<!DOCTYPE html>
<html>
<head>
  <title>Employee Management</title>
  <link rel="stylesheet" href="employeeManagement.css">
  <script src="../Controller/employeeManagement.js"></script>
</head>
<body>
  <h1>Employee Management</h1>

  <div class="btn-group">
    <button class="btn" onclick="edit()">Edit</button>
    <button class="btn" onclick="saveChanges()" id="saveBtn" disabled>Save Changes</button>
  </div>

  <section>
    <h2>Weekly Roaster</h2>
    <table>
      <thead>
        <tr>
          <th>Employee</th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
          <th>Saturday</th>
          <th>Sunday</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Alice</td>
          <td><input type="text" value="9AM - 5PM" disabled></td>
          <td><input type="text" value="9AM - 5PM" disabled></td>
          <td><input type="text" value="Off" disabled></td>
          <td><input type="text" value="9AM - 5PM" disabled></td>
          <td><input type="text" value="Off" disabled></td>
          <td><input type="text" value="9AM - 1PM" disabled></td>
          <td><input type="text" value="Off" disabled></td>
        </tr>
      </tbody>
    </table>
  </section>

  <section>
    <h2>Shift Swap Board</h2>
    <table>
      <thead>
        <tr>
          <th>Request From</th>
          <th>Requested To</th>
          <th>Date</th>
          <th>Shift</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Alice</td>
          <td>Bob</td>
          <td>2025-05-07</td>
          <td>Morning</td>
          <td>
            <select disabled>
            <option>Pending</option>
            <option>Approved</option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>
  </section>

  <section>
    <h2>Time Off Requests</h2>
    <table>
      <thead>
        <tr>
          <th>Employee</th>
          <th>Date</th>
          <th>Reason</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Bob</td>
          <td>2025-05-12</td>
          <td>Family Event</td>
          <td>
            <select disabled>
              <option>Pending</option>
              <option>Approved</option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>
</body>
</html>

<?php
  }else{
    header("location: home.php");
  }

?>
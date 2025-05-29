<?php
  session_start();
  if(isset($_SESSION['statusA'])){
      require_once("../Model/reservationModel.php");

  $result = viewTable();
?>

  <!DOCTYPE html>
  <html>
  <head>
    <title>All Reservations</title>
    <link rel="stylesheet" href="reservationManagement.css">
  </head>
  <body>

  <a href="adminDashboard.php" class="back-button">&larr; Back</a>

  <h2>All Reservations</h2>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date</th>
        <th>Time Slot</th>
        <th>Party Size</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Special Request</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['customer']; ?></td>
          <td><?php echo $row['date']; ?></td>
          <td><?php echo $row['time_slot']; ?></td>
          <td><?php echo $row['party_size']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['special_request']; ?></td>
          <td>
            <form action="../Controller/updateStatus.php" method="post" class="status-form">
              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
              <select name="statusR">
                <option value="pending" <?php if($row['status'] == 'pending') echo "selected"; ?>>Pending</option>
                <option value="approved" <?php if($row['status'] == 'approved') echo "selected"; ?>>Approved</option>
                <option value="rejected" <?php if($row['status'] == 'rejected') echo "selected"; ?>>Rejected</option>
              </select>
              <button type="submit">Update</button>
            </form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

  </body>
  </html>
  <?php
  }else{
    header("location: home.php");
  }

  ?>


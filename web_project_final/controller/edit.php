<?php
$con = mysqli_connect("127.0.0.1:3399", "root", "", "resturent_db");

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['id'], $_POST['update'])) {
    // Update operation
    $id = $_POST['id'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $imgUrl = $_POST['img_url'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    $sql = "UPDATE user_info SET 
              first_name = '$firstName', 
              last_name = '$lastName', 
              email = '$email', 
              password = '$password', 
              dob = '$dob', 
              img_url = '$imgUrl', 
              address = '$address', 
              role = '$role' 
            WHERE id = $id";

    if (mysqli_query($con, $sql)) {
      echo "<script>alert('User updated successfully'); window.location.href='../view/all_user.php';</script>";
    } else {
      echo "Error updating user: " . mysqli_error($con);
    }

  } elseif (isset($_POST['id'])) {
    
    $id = $_POST['id'];
    $result = mysqli_query($con, "SELECT * FROM user_info WHERE id = $id");

    if ($row = mysqli_fetch_assoc($result)) {
      ?>
      <!DOCTYPE html>
      <html>
      <head>
        <title>Edit User</title>
        <style>
          body {
            font-family: Arial;
            background: #f5f5f5;
            padding: 40px;
          }
          form {
            background: white;
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
          }
          input, select {
            display: block;
            margin-bottom: 15px;
            width: 100%;
            padding: 10px;
          }
          input[type="submit"] {
            background-color: #00796b;
            color: white;
            border: none;
            cursor: pointer;
          }
        </style>
      </head>
      <body>
        <h2 style="text-align:center;">Edit User</h2>
        <form method="POST">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" placeholder="First Name" required>
          <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" placeholder="Last Name" required>
          <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Email" required>
          <input type="text" name="password" value="<?php echo $row['password']; ?>" placeholder="Password" required>
          <input type="date" name="dob" value="<?php echo $row['dob']; ?>" required>
          <input type="text" name="img_url" value="<?php echo $row['img_url']; ?>" placeholder="Image URL">
          <input type="text" name="address" value="<?php echo $row['address']; ?>" placeholder="Address" required>
          <select name="role">
            <option value="admin" <?php if($row['role']=='admin') echo 'selected'; ?>>Admin</option>
            <option value="user" <?php if($row['role']=='user') echo 'selected'; ?>>User</option>
            <option value="chef" <?php if($row['role']=='chef') echo 'selected'; ?>>chef</option>

          </select>
          <input type="submit" name="update" value="Update">
        </form>
      </body>
      </html>
      <?php
    } else {
      echo "User not found!";
    }
  } else {
    echo "Invalid request.";
  }
} else {
  echo "Access denied.";
}

mysqli_close($con);
?>

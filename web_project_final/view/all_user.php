<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Panel – Users</title>
  <link rel="stylesheet" href="../aqi.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #eef2f3;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      margin-top: 80px;
    }

    .side {
      max-width: 300px;
      margin: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      padding: 20px;
      flex-shrink: 0;
    }

    .side ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .side ul li {
      margin: 10px 0;
    }

    .side ul li a {
      color: #00796b;
      text-decoration: none;
      font-size: 16px;
      display: block;
      padding: 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .side ul li a:hover {
      background-color: #00796b;
      color: white;
    }

    .content {
      flex: 1;
      margin: 20px;
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      overflow-x: auto;
    }

    h2 {
      text-align: center;
      color: #00796b;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 12px;
      text-align: center;
      border: 1px solid #ddd;
    }

    th {
      background: #00796b;
      color: white;
    }

    td img {
      border-radius: 5px;
    }

    td form {
      margin: 0 2px;
    }
    button{

        padding: 6px 10px;
      border: none;
      background-color:rgb(185, 23, 23);
      color: white;
      border-radius: 4px;
      cursor: pointer;
      width: 80px;
      transition: background-color 0.2s ease;
    }
    input[type="submit"] {
      padding: 6px 10px;
      border: none;
      width: 80px;
      background-color: #009688;
      color: white;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }

    input[type="submit"]:hover {
      background-color: #00796b;
    }
    td form {
  margin: 0;
  margin-top : 5px;
  
}
  </style>
</head>
<body>
  <?php include 'admin_nav.php'; ?>
  <div class="container">
    <div class="side">
      <ul>
        <li><a href="admin_index.php">Home</a></li>
        <li><a href="all_user.php">Users</a></li>
        <li><a href="#">Tables</a></li>
        <li><a href="#">Discounts</a></li>
        <li><a href="#">Emails</a></li>
        <li><a href="#">Posts</a></li>
      </ul>
    </div>

    <div class="content">
      <h2>User Management</h2>
      <table>
        <tr>
          <th>ID</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Date of Birth</th>
          <th>Image</th>
          <th>Address</th>
          <th>Role</th>
          <th>Actions</th>
        </tr>
        <?php 
        $con = mysqli_connect("127.0.0.1:3399", "root", "", "resturent_db");

        if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM user_info";
        $obj = mysqli_query($con, $sql);

        while ($entry = mysqli_fetch_assoc($obj)) {
          $id = $entry['id'];
          $firstName = $entry['first_name'];
          $lastName = $entry['last_name'];
          $email = $entry['email'];
          $password = $entry['password'];
          $dob = $entry['dob'];
          $imgUrl = $entry['img_url'];
          $address = $entry['address'];
          $role = $entry['role'];

          echo "<tr>
                  <td>$id</td>
                  <td>$firstName $lastName</td>
                  <td>$email</td>
                  <td>$password</td>
                  <td>$dob</td>
                  <td><img src='$imgUrl' alt='Image' width='50'></td>
                  <td>$address</td>
                  <td>$role</td>
                  <td>
                    <button class='delete-btn' data-id='$id'>Delete</button>
                    <form action='../controller/edit.php' method='POST' style='display:inline-block;'>
                      <input type='hidden' name='id' value='$id'>
                      <input type='submit' value='Edit'>
                    </form> 
                    
                  </td>
                </tr>";
        }

        mysqli_close($con);
        ?>
      </table>
    </div>
  </div>
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(button => {
      button.addEventListener('click', function () {
        const userId = this.getAttribute('data-id');

       // if (confirm("Are you sure you want to delete this user?")) {
          fetch('../Model/delete.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `id=${userId}`
          })
          .then(response => response.text())
          .then(result => {
            //alert(result);
            if (result.trim() === "success") {
              this.closest('tr').remove();
            } else {
              alert("Delete failed!");
            }
          })
          .catch(error => {
            console.error("Error:", error);
          });
       // }
      });
    });
  });
</script>

</body>
</html>

<?php 
session_start();
if( $_SESSION['is_admin'] == false && !isset($_SESSION['is_admin']) ) {
    echo "<script>alert('Please login first');
       window.location.href = 'user_login.php';
    </script>";
    exit();
}

?>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const bell = document.getElementById("notification");
        const dropdown = bell.querySelector(".dropdown");

    if (bell && dropdown) {
      bell.addEventListener("click", function (e) {
        e.stopPropagation();
        dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
      });

      document.body.addEventListener("click", function () {
        dropdown.style.display = "none";
      });
    }
  });
    </script>
    <style>
      body {
        font-family: Arial, sans-serif;
        background: #eef2f3;
        padding: 0;
        margin: 0;
      }

      nav {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 999;
        background-color: rgba(0, 121, 107, 0.7); /* Transparent background */
        backdrop-filter: blur(10px); /* Blur effect */
        -webkit-backdrop-filter: blur(10px);
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      }

      nav .nav-right {
        display: flex;
        align-items: center;
      }

      nav .nav-links {
        display: flex;
        align-items: center;
      }

      nav .nav-links a {
        color: white;
        text-decoration: none;
        margin-left: 15px;
        font-size: 16px;
        padding: 8px 14px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }

      nav .nav-links a:hover {
        background-color: rgba(255, 255, 255, 0.2);
      }

      .notification {
        position: relative;
        margin-left: 20px;
        font-size: 20px;
        cursor: pointer;
      }

      .notification .badge {
        position: absolute;
        top: -6px;
        right: -8px;
        background: red;
        color: white;
        font-size: 10px;
        padding: 2px 6px;
        border-radius: 50%;
      }

      .dropdown {
        display: none;
        position: absolute;
        top: 30px;
        right: 0;
        background: white;
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 200px;
        padding: 10px;
        z-index: 1000;
      }

      .dropdown ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }

      .dropdown ul li {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        color: #333;
      }

      .dropdown ul li:last-child {
        border-bottom: none;
      }

      .dropdown ul li:hover {
        background-color: #f1f1f1;
      }

      .logo a {
        color: white;
        text-decoration: none;
        margin-left: 15px;
        font-size: 16px;
        padding: 8px 14px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }
    </style>
    <nav>
      <div class="logo"><a href="admin_index.php">Admin Dashboard</a></div>
      <div class="nav-right">
        <div class="nav-links">
          <a href="sell_report.php">Sell Report</a>
          <a href="#">Orders</a>
          <a href="kitchen_ticket.php">Kitchen Ticket</a>
          <a href="inventory.php">Inventory</a>
          <a href="#">Menu</a>
          <a href="admin_feedback.php">Feedback</a>
          <a href="../controller/logout.php">Logout</a>
        </div>
        <div class="notification" id="notification">
          <i class="fas fa-bell"></i>
          <span class="badge">1</span>
          <div class="dropdown" id="dropdown">
            <ul>
              <li>New Mail</li>
              <li>New Mail 2</li>
              <li>New Mail 3</li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
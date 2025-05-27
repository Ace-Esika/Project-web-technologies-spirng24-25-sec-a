<?php 
    session_start();
?>
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
        background-color: rgba(0, 121, 107, 0.7);
        backdrop-filter: blur(10px); 
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
        color: #fff;
        text-decoration: none;
        margin-left: 15px;
        font-size: 16px;
        padding: 8px 14px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }

      nav .nav-links a:hover {
        background-color: rgba(0, 0, 0, 0.05);
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
        color: #fff;
        text-decoration: none;
        font-size: 20px;
        font-weight: bold;
        transition: opacity 0.3s ease;
      }

      main {
        margin-top: 80px; 
        padding: 20px;
      }
    </style>
    <nav>
      <div class="logo"><a href="index.php">Ichuraku Kitchen</a></div>
      <div class="nav-right">
        <div class="nav-links">
          <a href="index.php">Home</a>
          <?php if ($is_logged_in) { 
            echo " <a href='#'>Menu</a>";  
            }else{
               echo "<a href='view/user_login.php'>Menu</a>";
            }
            ?>
         
          <?php if ($is_logged_in) { 
            echo " <a href='#'>Order Track</a>";  
            }else{
               echo "<a href='view/user_login.php'>Order Track</a>";
            }
            ?>
          <?php if ($is_logged_in) { 
            echo " <a href='#'>Table</a>";  
            }else{
               echo "<a href='view/user_login.php'>Table</a>";
            }
            ?>
          <a href="view/contact_us.html">Contuct us</a>
          <?php 
          if ($is_logged_in) {
            //echo '<a href="user_profile.php">HI ' . htmlspecialchars($user_name) . '</a>';
            echo '<a href="user_profile.php">Profile</a>';
            echo '<a href="control/logout.php">Logout</a>';
          } else {
            echo '<a href="view/user_login.php">Login</a>';
          }
          ?>
         
        </div>
      </div>
    </nav>

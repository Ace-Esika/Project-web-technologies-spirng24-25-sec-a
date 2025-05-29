<?php 
session_start();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Feedback</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <style>
      body {
        font-family: Arial, sans-serif;
        background: #eef2f3;
        padding: 0;
        margin: 0;
      }

      .dashboard {
        max-width: 900px;
        margin: 40px auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
      }

      h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #00796b;
      }
      
      .feedback {
        border-bottom: 1px solid #ddd;
        padding-bottom: 15px;
        margin-bottom: 15px;
      }

      .feedback > p {
        font-weight: bold;
        margin: 0;
        color: #00796b;
      }

      .feedback > span {
        display: block;
        margin-top: 5px;
        color: #555;
      }

      .replies {
        margin-left: 20px;
        margin-top: 10px;
      }

      .reply {
        background-color: #f1f1f1;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
      }

      textarea {
        width: 100%;
        padding: 10px;
        resize: vertical;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      button.reply-btn {
        background-color: #00796b;
        color: white;
        padding: 8px 14px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 5px;
      }

      button.reply-btn:hover {
        background-color: #005f56;
      }
    </style>
  </head>
  <body>
   <?php include 'admin_nav.php'; ?>

    <div class="dashboard">
      <h2>Customer Feedback</h2>

      <div class="feedback">
        <p>Affan</p>
        <span>Great service! But the food was a bit cold.</span>
        <div class="replies">
          <div class="reply">
            <strong>Admin:</strong> Thank you for your feedback. We'll work on improving the food temperature.
          </div>
        </div>
        <textarea placeholder="Write a reply..."></textarea>
        <button class="reply-btn">Reply</button>
      </div>

      <div class="feedback">
        <p>Ainea</p>
        <span>Loved the pizza! Will order again.</span>
        <div class="replies">
          <div class="reply">
            <strong>Admin:</strong> Thank you for your kind words! We're glad you enjoyed the pizza.
          </div>
        </div>
        <textarea placeholder="Write a reply..."></textarea>
        <button class="reply-btn">Reply</button>
      </div>

    </div>

    <script>

      var reply_btn = document.querySelectorAll(".reply-btn");
      reply_btn.forEach((btn) => {
        btn.addEventListener("click", () => {
  
          var text = btn.previousElementSibling.value;
          if (text.trim() !== "") {
            var new_reply = document.createElement("div");
            new_reply.classList.add("reply");
            new_reply.innerHTML = `<strong>Admin:</strong> ${text}`;
            btn.previousElementSibling.value = ""; 
            var replies = btn.closest(".feedback").querySelector(".replies");
            replies.appendChild(new_reply);
          } else {
            alert("Please write a reply first.");
          }
        });
      });
    </script>
  </body>
</html>

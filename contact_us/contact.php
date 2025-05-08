<?php
$name = $email = $message = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (empty($name)) {
        $errors['name'] = "Name is required.";
    }

    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    if (empty($message)) {
        $errors['message'] = "Message is required.";
  
    }

    if (empty($errors)) {
      echo "<script>alert('Form submitted successfully!');</script>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #205781;
      color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .contact-container {
      background-color: #034c53;
      padding: 30px;
      border-radius: 10px;
      width: 400px;
    }

    .contact-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 8px;
      border: none;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .form-group textarea {
      resize: vertical;
      height: 100px;
    }

    .error {
      color: #ff7e7e;
      font-size: 14px;
      margin-top: 5px;
    }

    .btn {
      background-color: #0099cc;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
    }

    .btn:hover {
      background-color: #007ba0;
    }
  </style>
</head>
<body>

<div class="contact-container">
  <h2>Contact Us</h2>
  <form action="contact.php" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" value="<?= htmlspecialchars($name) ?>" />
      <?php if (!empty($errors['name'])): ?>
        <div class="error"><?= $errors['name'] ?></div>
      <?php endif; ?>
    </div>
    
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" />
      <?php if (!empty($errors['email'])): ?>
        <div class="error"><?= $errors['email'] ?></div>
      <?php endif; ?>
    </div>
    
    <div class="form-group">
      <label for="message">Message</label>
      <textarea id="message" name="message"><?= htmlspecialchars($message) ?></textarea>
      <?php if (!empty($errors['message'])): ?>
        <div class="error"><?= $errors['message'] ?></div>
      <?php endif; ?>
    </div>
    
    <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
    <button class="btn" type="submit">Submit</button>
  </form>
</div>

</body>
</html>

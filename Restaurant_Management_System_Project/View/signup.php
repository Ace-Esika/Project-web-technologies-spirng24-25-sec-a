<?php
  session_start();
  if(isset($_SESSION['home'])){
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="signup.css">
  <title>Register</title>
</head>
<body>
  <div class="container">
    <div class="image-half"></div>
    <div class="text-half">
      <h1>Registration</h1>
      <form action="../Controller/signupCheck.php" method="post" onsubmit="return validate()">
        <table>
            <tr>
                <td><label for="firstName">First Name</label></td>
                <td><input type="text" id="firstname" name="firstName"></td>
            </tr>
            <tr>
                <td><label for="lastName">Last Name</label></td>
                <td><input type="text" id="lastname" name="lastName"></td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" id="username" name="username"></td><br>
            </tr>
            <tr>
              <td colspan="2" id="table1"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="text" id="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="dob">Date of Birth</label></td>
                <td><input type="date" id="dob" name="dob"></td>
            </tr>
            <tr>
                <td><label for="phone">Phone Number</label></td>
                <td><input type="text" id="phone" name="phone"></td>
            </tr>
            <tr>
                <td><label for="gender">Gender</label></td>
                <td>
                  <select id="gender" name="gender">
                    <option value="">Select One</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
                </td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" id="password" name="password"></td>
            </tr>
            <tr>
                <td><label for="confirmPassword">Confirm Password</label></td>
                <td><input type="password" id="confirmPassword" name="confirmPassword"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit"  name="submit1" value="Register" id="submit">
                </td>
            </tr>
            <tr>
              <td colspan="2"><div id="table"></div></td>
            </tr>
            <tr style="text-align: center;">
                <td colspan="2"><a href="login.html" style="color: blue;">Already have an account? Login here</a></td>
            </tr>
        </table>
      </form>
    </div>
  </div>
  <script>
    let usernameAvailable = false;

    document.getElementById('username').addEventListener('blur', function() {
    let username = document.getElementById("username").value.trim();

    if(username == ""){
        document.getElementById('table1').innerHTML = "";
        usernameAvailable = false;
        return;
    }

    let json = {
        'username': username
    };
    let data = JSON.stringify(json);

    let xhttp = new XMLHttpRequest();
    xhttp.open('post', '../Controller/usernameCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('json=' + data);

    xhttp.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200){
            let response = this.responseText.trim();

            if(response == "taken"){
                document.getElementById('table1').style.color = "red";
                document.getElementById('table1').innerHTML = "Username already taken.";
                usernameAvailable = false;
            } 
            else if(response == "available"){
                document.getElementById('table1').style.color = "green";
                document.getElementById('table1').innerHTML = "Username is available!";
                usernameAvailable = true;
            } 
            else {
                document.getElementById('table1').style.color = "orange";
                document.getElementById('table1').innerHTML = "Error checking username.";
                usernameAvailable = false;
            }
        }
    }
});
  </script>
  <script src="../Controller/signup.js"></script>
</body>
</html>
<?php
  }else{
    header("location: home.php");

  }
?>

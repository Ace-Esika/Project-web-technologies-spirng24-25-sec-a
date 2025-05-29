<?php
    session_start();
    if(isset($_POST['submit1'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $cPassword = trim($_POST['confirmPassword']);
        $dob = $_POST['dob'];
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];

        if($username == "" || $password == "" || $dob == "" || $firstname == "" || $lastname == "" || $email == "" || $phone == "" || $cPassword == ""){
            echo "<script>alert('Please fill all the input box.');
            window.location.href='../View/signup.php';
            </script>";exit;
        }


        $hasNumber = false;
        $chars = str_split($firstname);
        foreach ($chars as $char) {
            if (is_numeric($char)) {
                $hasNumber = true;
                break;
            }
        }
        if($hasNumber){
            echo "<script>alert('Firstname can't contain number.');
            window.location.href='../View/signup.php';
            </script>";exit;
        }

        $hasNumber = false;
        $chars = str_split($lastname);
        foreach ($chars as $char) {
            if (is_numeric($char)) {
                $hasNumber = true;
                break;
            }
        }
        if($hasNumber){
            echo "<script>alert('Lastname can't contain number.');
            window.location.href='../View/signup.php';
            </script>";exit;
        }

        if(!is_numeric($phone)){
            echo "<script>alert('Phone number can only contain number.');
            window.location.href='../View/signup.php';
            </script>";exit;
        }

        if (!str_contains($email, "@") || !str_contains($email,".") || str_contains($email," ")) {
            echo "<script>alert('Please enter a valid email.');
            window.location.href='../View/signup.php';
            </script>";exit;
        }

        if($password != $cPassword){
            echo "<script>alert('Password and Confirm Password should be same.');
            window.location.href='../View/signup.php';
            </script>";exit;
        }

        require_once("../Model/usersModel.php");

        $username = $_POST['username'];
        $result = usernameCheck($username);

        if(mysqli_num_rows($result) > 0) {
            echo "<script>alert('Username already exists. Choose another one.');
            window.location.href='../View/signup.php';
            </script>";exit;
        } 
        else{
            if(insertInfo($firstname, $lastname, $username, $email, $dob, $phone, $gender, $password)) {
            echo "<script>alert('You have successfully registered.');
            window.location.href='../View/login.php';
            </script>";exit;
            } 
            else{
                echo "<script>alert('DB error');
                window.location.href='../View/signup.php';
                </script>";exit;
            }
        }        
?>
<?php
    }else{
        header("location: ../View/home.php");
    }
?>
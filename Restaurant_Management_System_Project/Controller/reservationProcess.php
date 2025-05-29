<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $spe_req = $_POST['special_request'];
    $party_size = $_POST['party_size'];
    $sh = $_POST['start_hour'];
    $eh = $_POST['end_hour'];
    $sm = $_POST['start_minute'];
    $em = $_POST['end_minute'];
    $sa = $_POST['start_ampm'];
    $ea = $_POST['end_ampm'];
    $time_slot = $sh.":".$sm." ".$sa." - ".$eh.":".$em." ".$ea;
    $date = $_POST['date'];

    if($name == "" || $email == "" || $phone == "" || $party_size == "" || $date == ""){
        echo "<script>alert('Please fill all the input box.');
            window.location.href='../View/reservation.php';
            </script>";exit;
    }

    $hasNumber = false;
    $chars = str_split($name);
    foreach ($chars as $char) {
        if (is_numeric($char)) {
            $hasNumber = true;
            break;
        }
    }
    if($hasNumber){
        echo "<script>alert('Name can't contain number.');
        window.location.href='../View/reservation.php';
        </script>";exit;
    }

    if(!is_numeric($phone)){
        echo "<script>alert('Phone number can only contain number.');
        window.location.href='../View/reservation.php';
        </script>";exit;
    }

    if (!str_contains($email, "@") || !str_contains($email,".") || str_contains($email," ")) {
        echo "<script>alert('Please enter a valid email.');
        window.location.href='../View/reservation.php';
        </script>";exit;
    }

    if($party_size<1 || $party_size>25){
        echo "<script>alert('Party Size can't be less than 0 and greater than 25');
        window.location.href='../View/reservation.php';
        </script>";exit;
    }

    require_once("../Model/reservationModel.php");

    if(insertInfo($name, $date, $time_slot, $party_size, $email, $phone, $spe_req)) {
            echo "<script>alert('Your reservation has successfully done. Wait for approval. ');
            window.location.href='../View/customerDashboard.php';
            </script>";exit;
            } 
            else{
                echo "<script>alert('DB error');
                window.location.href='../View/reservation.php';
                </script>";exit;
            }


?>
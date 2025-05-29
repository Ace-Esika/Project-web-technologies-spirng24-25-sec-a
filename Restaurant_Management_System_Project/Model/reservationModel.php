<?php
    require_once("db.php");

    function insertInfo($name, $date, $time_slot, $party_size, $email, $phone, $spe_req) {
        global $con;
        $sql = "INSERT INTO reservation VALUES (NULL, '$name', '$date', '$time_slot', '$party_size', '$email', '$phone', '$spe_req', 'pending')";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function viewTable(){
        global $con;
        $sql = "SELECT * FROM reservation";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function updateStatus($status, $id){
        global $con;
        $sql = "UPDATE reservation 
        SET status = '$status' 
        WHERE id ='$id'";
        $result = mysqli_query($con, $sql);
        return $result;
    }

?>
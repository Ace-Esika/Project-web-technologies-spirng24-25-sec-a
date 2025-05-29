<?php
    require_once("../Model/reservationModel.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $status = $_POST['statusR'];
        $id = $_POST['id'];

        if(updateStatus($status, $id)) {
            echo "<script>alert('Updated.');
            window.location.href='../View/reservationManagement.php';
            </script>";exit;
        } 
        else{
            echo "<script>alert('Something went wrong. Try again.');
            window.location.href='../View/reservationManagement.php';
            </script>";exit;
        }

    }
?>
<?php
    require_once("db.php");

    function foodView(){
        global $con;
        $sql = "SELECT * FROM food_details";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function oneFoodDetails($id){
        global $con;

        $sql = "SELECT * FROM food_details WHERE id = $id";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function getAllFoods() {
        global $con;
        $sql = "SELECT * FROM food_details";
        $result = mysqli_query($con, $sql);
        return $result;
    }

?>
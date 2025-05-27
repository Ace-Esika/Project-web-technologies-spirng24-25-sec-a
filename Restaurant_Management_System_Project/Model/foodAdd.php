<?php
    $itemName = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];
    $category = $_POST['category'];

    if($itemName == "" || $itemPrice == "" || $category == ""){
        echo "<script>alert('Please fill up the all box.');</script>";
    }
    else{
        require_once('db.php');

        $sql = "insert into foodDetails values(null, '$itemName','$itemPrice','$category')";

        if(mysqli_query($con, $sql)){
            echo "<script>alert('Food added successfully'); 
            window.location.href = '../View/foodAR.php';
            </script>";
            exit;
        }
        else{
            echo "<script>alert('DB error');</script>";
        }
    }
?>
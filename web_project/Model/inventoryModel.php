<?php
function getConnection() {
    $conn = mysqli_connect("localhost", "root", "", "resturent");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function getInventory() {
    $conn = getConnection();
    $sql = "SELECT name, quantity FROM inventory";
    $result = mysqli_query($conn, $sql);

    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $row['parLevel'] = 5; 
        $data[] = $row;
    }
    return $data;
}

function updateInventory($name, $quantity) {
    $conn = getConnection();
    $name = mysqli_real_escape_string($conn, $name);
    $quantity = intval($quantity);

    $sql = "UPDATE inventory SET quantity = $quantity WHERE name = '$name'";
    return mysqli_query($conn, $sql);
}
?>

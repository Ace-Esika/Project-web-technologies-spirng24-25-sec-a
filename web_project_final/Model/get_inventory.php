<?php
header("Content-Type: application/json");

$con = mysqli_connect("127.0.0.1:3399", "root", "", "resturent_db");

if (!$con) {
    echo json_encode(["error" => "Connection failed"]);
    exit;
}

$sql = "SELECT * FROM inventory";
$result = mysqli_query($con, $sql);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
?>

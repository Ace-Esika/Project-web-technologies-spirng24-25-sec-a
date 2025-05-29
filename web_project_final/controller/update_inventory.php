<?php
$con = mysqli_connect("127.0.0.1:3399", "root", "", "resturent_db");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = intval($_POST['id']);
$change = intval($_POST['change']);

$sql = "UPDATE inventory SET quantity = GREATEST(quantity + ?, 0) WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("ii", $change, $id);
$stmt->execute();

echo json_encode(["success" => $stmt->affected_rows > 0]);
?>

<?php
require_once '../model/inventoryModel.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json = json_decode($_POST['data'], true);
    $name = $json['name'];
    $quantity = $json['quantity'];

    if (empty($name) || !is_numeric($quantity)) {
        echo json_encode(["message" => "Invalid input."]);
        exit;
    }

    $result = updateInventory($name, $quantity);
    echo json_encode(["message" => $result ? "Updated successfully." : "Update failed."]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $data = getInventory();
    echo json_encode($data);
    exit;
}
?>

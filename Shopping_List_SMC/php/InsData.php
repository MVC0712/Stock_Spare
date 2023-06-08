<?php
require_once('../../connection.php');
$dbh = new DBHandler();
if ($dbh->getInstance() === null) {
    die("No database connection");
}
$catalogue = $_POST['catalogue'];
$delivery_by_id = $_POST['delivery_by_id'];
$expect_date = $_POST['expect_date'];
$line_id = $_POST['line_id'];
$material = $_POST['material'];
$note = $_POST['note'];
$perpose = $_POST['perpose'];
$po_created_at = $_POST['po_created_at'];
$po_name = $_POST['po_name'];
$product_code = $_POST['product_code'];
$product_name = $_POST['product_name'];
$product_vie_name = $_POST['product_vie_name'];
$quantity = $_POST['quantity'];
$requester_id = $_POST['requester_id'];
$to_smc_date = $_POST['to_smc_date'];

try {
    $sql = "INSERT INTO t_shopping_list_smc (
        catalogue, delivery_by_id, expect_date, line_id, material, note, perpose, po_created_at, po_name, 
        product_code, product_name, product_vie_name, quantity, requester_id, to_smc_date) VALUES (
        '$catalogue', '$delivery_by_id', '$expect_date', '$line_id', '$material', '$note', '$perpose', '$po_created_at', '$po_name', 
        '$product_code', '$product_name', '$product_vie_name', '$quantity', '$requester_id', '$to_smc_date') ";
    $stmt = $dbh->getInstance()->prepare($sql);
    $stmt->execute();
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
} 
catch(PDOException $e) {
    echo $e;
}
?>
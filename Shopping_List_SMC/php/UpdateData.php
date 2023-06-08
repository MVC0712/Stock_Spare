<?php
require_once('../../connection.php');
$dbh = new DBHandler();
if ($dbh->getInstance() === null) {
    die("No database connection");
}
$targetId = $_POST['targetId'];
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
    $sql = "UPDATE t_shopping_list_smc SET 
    catalogue='$catalogue',
    delivery_by_id='$delivery_by_id',
    expect_date='$expect_date',
    line_id='$line_id',
    material='$material',
    note='$note',
    perpose='$perpose',
    po_created_at='$po_created_at',
    po_name='$po_name',
    product_code='$product_code',
    product_name='$product_name',
    product_vie_name='$product_vie_name',
    quantity='$quantity',
    requester_id='$requester_id',
    to_smc_date='$to_smc_date'
    WHERE id = '$targetId'";
    $stmt = $dbh->getInstance()->prepare($sql);
    $stmt->execute();
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
} 
catch(PDOException $e) {
    echo $e;
}
?>
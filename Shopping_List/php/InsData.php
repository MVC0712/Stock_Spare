<?php
require_once('../../connection.php');
$dbh = new DBHandler();
if ($dbh->getInstance() === null) {
    die("No database connection");
}
$approved_no = $_POST['approved_no'];
$category_id = $_POST['category_id'];
$currency_unit_id = $_POST['currency_unit_id'];
$deliery_date = $_POST['deliery_date'];
$imprort_harehouse = $_POST['imprort_harehouse'];
$line_id = $_POST['line_id'];
$maker = $_POST['maker'];
$note = $_POST['note'];
$order_date = $_POST['order_date'];
$person_incharge_id = $_POST['person_incharge_id'];
$po_no = $_POST['po_no'];
$po_shopping_cart = $_POST['po_shopping_cart'];
$pr_sap = $_POST['pr_sap'];
$product_en_name = $_POST['product_en_name'];
$product_id = $_POST['product_id'];
$product_vie_name = $_POST['product_vie_name'];
$quantity = $_POST['quantity'];
$quotation_request_date = $_POST['quotation_request_date'];
$requester_id = $_POST['requester_id'];
$ringi_date = $_POST['ringi_date'];
$ringi_no = $_POST['ringi_no'];
$shoping_cart = $_POST['shoping_cart'];
$stock_nonstock_id = $_POST['stock_nonstock_id'];
$supplier = $_POST['supplier'];
$to_smc_date = $_POST['to_smc_date'];
$total = $_POST['total'];
$type = $_POST['type'];
$unit_id = $_POST['unit_id'];
$unit_price = $_POST['unit_price'];
$using_position = $_POST['using_position'];

try {
    $sql = "INSERT INTO t_shopping_list(
        po_no, imprort_harehouse, pr_sap, shoping_cart, po_shopping_cart, ringi_no, approved_no, product_en_name, product_vie_name, 
        product_id, maker, supplier, category_id, stock_nonstock_id, quantity, unit_id, currency_unit_id, unit_price, total, 
        order_date, deliery_date, to_smc_date, person_incharge_id, requester_id, quotation_request_date, type, using_position, ringi_date, note, line_id) VALUES (
        '$po_no', '$imprort_harehouse', '$pr_sap', '$shoping_cart', '$po_shopping_cart', '$ringi_no', '$approved_no', '$product_en_name', '$product_vie_name', 
        '$product_id', '$maker', '$supplier', '$category_id', '$stock_nonstock_id', '$quantity', '$unit_id', '$currency_unit_id', '$unit_price', '$total', 
        '$order_date', '$deliery_date', '$to_smc_date', '$person_incharge_id', '$requester_id', '$quotation_request_date', '$type', '$using_position', '$ringi_date', '$note', '$line_id') ";
    $stmt = $dbh->getInstance()->prepare($sql);
    $stmt->execute();
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
} 
catch(PDOException $e) {
    echo $e;
}
?>
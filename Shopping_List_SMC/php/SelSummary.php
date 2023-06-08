<?php
require_once('../../connection.php');
$dbh = new DBHandler();
if ($dbh->getInstance() === null) {
    die("No database connection");
}
try {
    $sql = "SELECT 
    t_shopping_list.id,
    po_no,
    imprort_harehouse,
    pr_sap,
    shoping_cart,
    po_shopping_cart,
    ringi_no,
    approved_no,
    product_en_name,
    product_vie_name,
    product_id,
    maker,
    supplier,
    category,
    stock_nonstock,
    quantity,
    unit,
    currency_unit,
    unit_price,
    total,
    order_date,
    deliery_date,
    to_smc_date,
    person_incharge,
    requester,
    quotation_request_date,
    type,
    using_position,
    ringi_date,
    note
FROM
    stock_spare.t_shopping_list
        LEFT JOIN
    m_category ON m_category.id = t_shopping_list.category_id
        LEFT JOIN
    m_currency_unit ON m_currency_unit.id = t_shopping_list.currency_unit_id
        LEFT JOIN
    m_line ON m_line.id = t_shopping_list.line_id
        LEFT JOIN
    m_person_incharge ON m_person_incharge.id = t_shopping_list.person_incharge_id
        LEFT JOIN
    m_requester ON m_requester.id = t_shopping_list.requester_id
        LEFT JOIN
    m_stock_nonstock ON m_stock_nonstock.id = t_shopping_list.stock_nonstock_id
        LEFT JOIN
    m_type ON m_type.id = t_shopping_list.type_id
        LEFT JOIN
    m_unit ON m_unit.id = t_shopping_list.unit_id";
    $stmt = $dbh->getInstance()->prepare($sql);
    $stmt->execute();
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
} 
catch(PDOException $e) {
    echo $e;
}
?>
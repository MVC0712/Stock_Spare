<?php
require_once('../../connection.php');
$dbh = new DBHandler();
if ($dbh->getInstance() === null) {
    die("No database connection");
}
try {
    $sql = "SELECT t_shopping_list_smc.id, po_created_at, po_name, delivery_by, product_name, product_code, quantity, expect_date, to_smc_date, note, product_vie_name, material, catalogue, perpose, requester FROM t_shopping_list_smc
        LEFT JOIN
    m_requester ON m_requester.id = t_shopping_list_smc.requester_id
    LEFT JOIN
    m_delivery_by ON m_delivery_by.id = t_shopping_list_smc.delivery_by_id";
    $stmt = $dbh->getInstance()->prepare($sql);
    $stmt->execute();
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
} 
catch(PDOException $e) {
    echo $e;
}
?>
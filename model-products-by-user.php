<?php
function selectProductsByUser($oid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.product_id, product_name, category_id, orders_amount, order_status FROM `product` p join orders o on o.product_id = p.product_id where o.user_id=?");
        $stmt->bind_param("i", $oid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

<?php
function selectProducts() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT product_id, product_name, category_id FROM `product` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectCategoriesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT category_id, category_name FROM `category` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertProduct($pName, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `product` (`product_name`, `category_id`) VALUES (?, ?)");
        $stmt->bind_param("si", $pName, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateProduct($pName, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `product` SET `product_name` = ? WHERE `product_id` = ?");
        $stmt->bind_param("si", $pName, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteProduct($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM product WHERE `product`.`product_id` = ?");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

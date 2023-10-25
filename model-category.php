<?php
function selectCategory() {
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

function insertCategory($cName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `category` (`category_name`) VALUES (?, ?)");
        $stmt->bind_param("s", $cName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCategory($cName, $Cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `category` SET `category_name` = ? WHERE `category_id` = ?");
        $stmt->bind_param("si", $cName, $Cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteCategory($Cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM category WHERE `category`.`category_id` = ?");
        $stmt->bind_param("i", $Cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>

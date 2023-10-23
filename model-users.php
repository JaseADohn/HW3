<?php
function selectUsers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT user_id, user_name, user_password FROM `user` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertUser($uName, $uPassword) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `user` (`user_name`, `user_password`) VALUES (?, ?)");
        $stmt->bind_param("ss", $uName, $uPassword);
        $success = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateUser($uName, $uPassword, $uid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `user` set (`user_name` = ?, `user_password` = ?) where user_id = ?");
        $stmt->bind_param("ssi", $uName, $uPassword, $uid);
        $success = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteUser($uid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from user where user_id=?");
        $stmt->bind_param("i", $uid);
        $success = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>

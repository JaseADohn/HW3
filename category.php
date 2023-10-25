<?php
require_once("util-db.php");
require_once("model-category.php");

$pageTitle = "Category";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
    case "Add":
      if (insertUser($_POST['cName'])) {
          echo '<div class="alert alert-success" role="alert"> Category added </div>';
        } 
        break;
        case "Edit":
      if (updateUser($_POST['cName'], $_POST['Cid'])) {
          echo '<div class="alert alert-success" role="alert"> Category Edited </div>';
        } 
        break;
    case "Delete":
      if (deleteUser($_POST['Cid'])) {
          echo '<div class="alert alert-success" role="alert"> Category deleted </div>';
        } 
        break;
    }
}

$users = selectUsers();
include "view-users.php";
include "view-footer.php";
?>

<?php
require_once("util-db.php");
require_once("model-users.php");

$pageTitle = "Users";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
      case "Add":
      if (insertUser($_POST['uName'], $_POST['uPassword']);) {
          echo '<div class="alert alert-success" role="alert"> User added </div>';
        } else {
          echo '<div class="alert alert-danger" role="alert"> error </div>';
            }
        break;
    }
}

$users = selectUsers();
include "view-users.php";
include "view-footer.php";
?>

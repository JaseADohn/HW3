<?php
require_once("util-db.php");
require_once("model-users-with-products.php");
$pageTitle = "Users";
include "view-header.php";

$users = selectUsers();
include "view-users-with-products.php";

include "view-footer.php";
?>

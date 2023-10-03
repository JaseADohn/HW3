<?php
require_once("util-db.php");
require_once("users-with-products.php");
$pageTitle = "Users";
include "view-header.php";

$users = selectUsers();
include "view-users-with-products.php";

include "view-footer.php";
?>

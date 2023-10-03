<?php
require_once("util-db.php");
require_once("model-users.php");
$pageTitle = "Users";
include "view-header.php";

$users = selectUsers();
include "view-instructors.php";

include "view-footer.php";
?>

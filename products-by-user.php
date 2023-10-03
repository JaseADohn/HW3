<?php
require_once("util-db.php");
require_once("model-products-by-user.php");
$pageTitle = "products by user";
include "view-header.php";

$products = selectProductsByUser($_GET['id']);
include "view-products-by-user.php";

include "view-footer.php";
?>

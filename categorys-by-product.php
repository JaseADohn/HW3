<?php
require_once("util-db.php");
require_once("model-category-by-product.php");
$pageTitle = "Category by product";
include "view-header.php";

$categorys = selectCategoryByProduct($_POST['pid']);
include "view-category-by-product.php";

include "view-footer.php";
?>

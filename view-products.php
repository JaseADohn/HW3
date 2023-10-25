<div class ="row">
  <div class="col">
    <h1>Products</h1>
  </div>
  <div class="col-auto">
    <?php
      include "view-product-newform.php";
    ?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Product ID</th>
      <th>Name</th>
      <th>Category ID</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($product = $products->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $product['product_id']; ?></td>
    <td><?php echo $product['product_name']; ?></td>
    <td><?php echo $product['category_id']; ?></td>
    <td>
    <?php
      include "view-product-editform.php";
    ?>
    </td>
    <td>
      <form method="post" action="categorys-by-product.php">
  <input type="hidden" name="pid" value="<?php echo $product['category_id']; ?>">
  <button type="category" class="btn btn-primary">Category</button>
      </form>
  </td>
  </tr>
  <?php
}

?>
    </tbody>
  </table>
</div>

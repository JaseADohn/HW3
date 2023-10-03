<h1>Products</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
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
    <td><?php echo $product['product_name']; ?></td>
    <td><?php echo $product['category_id']; ?></td>
    <td>
      <form method="post" action="categorys-by-products.php">
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

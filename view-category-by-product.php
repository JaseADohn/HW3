<h1>Category by product</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Product ID</th>
      <th>Name</th>
      <th>Category Name</th>
      <th>Order Amount</th>
      <th>Order Status</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($product = $products->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $product['product_id']; ?></td>
    <td><?php echo $product['product_name']; ?></td>
    <td><?php echo $product['category_name']; ?></td>
    <td><?php echo $product['orders_amount']; ?></td>
    <td><?php echo $product['order_status']; ?></td>
  </tr>
  <?php
}

?>
    </tbody>
  </table>
</div>

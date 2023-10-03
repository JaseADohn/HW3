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
while ($category = $categorys->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $category['product_id']; ?></td>
    <td><?php echo $category['product_name']; ?></td>
    <td><?php echo $category['category_name']; ?></td>
    <td><?php echo $category['orders_amount']; ?></td>
    <td><?php echo $category['order_status']; ?></td>
  </tr>
  <?php
}

?>
    </tbody>
  </table>
</div>

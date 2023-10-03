<h1>Users</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Name</th>
      <th>Category ID</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($product = $products->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $user['product_name']; ?></td>
    <td><?php echo $user['category_id']; ?></td>
  </tr>
  <?php
}

?>
    </tbody>
  </table>
</div>

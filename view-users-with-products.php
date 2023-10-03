<h1>Users with products</h1>
<div class="card-group">
<?php
while ($user = $users->fetch_assoc()) {
  ?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $user['user_name']; ?></h5>
      <p class="card-text">
  <?php
    $productss = selectProduct
  ?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Password: <?php echo $user['user_password']; ?></small></p>
    </div>
  </div>
  <tr>
    <td><?php echo $user['user_id']; ?></td>
    <td><?php echo $user['user_name']; ?></td>
    <td><?php echo $user['user_password']; ?></td>
    <td><a href ="products-by-user.php?id=<?php echo $user['user_id']; ?>">Products</a></td>
  </tr>
  <?php
}

?>
</div>


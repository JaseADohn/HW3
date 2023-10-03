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
    $productss = selectProductsbyuser($user['user_id']);
    while($product = $productss->fetch_assoc()) {
      ?>
      
      <?php
    }
  ?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Password: <?php echo $user['user_password']; ?></small></p>
    </div>
  </div>
  <?php
}

?>
</div>


<h1>Users</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Password</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($user = $users->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $user['user_id']; ?></td>
    <td><?php echo $user['user_name']; ?></td>
    <td><?php echo $user['user_password']; ?></td>
    <td><a href ="products-by-user.php?id=<?php echo $user['user_id']; ?>">Products</a></td>
  </tr>
  <?php
}

?>
    </tbody>
  </table>
</div>

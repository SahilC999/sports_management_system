<?php
session_start();
if(isset($_SESSION['user'])) {
  header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sports Management System</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2>Login to Sports Management System</h2>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</body>
</html>

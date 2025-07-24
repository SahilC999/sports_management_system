session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include('../includes/db.php');
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $result = $conn->query("SELECT * FROM users WHERE username='$user' AND password='$pass'");
  if ($result->num_rows == 1) {
    $_SESSION['user'] = $user;
    header('Location: ../index.php');
  } else {
    echo "Invalid credentials";
  }
}
?>
<form method="post">
  Username: <input type="text" name="username" required><br>
  Password: <input type="password" name="password" required><br>
  <button type="submit">Login</button>
</form>

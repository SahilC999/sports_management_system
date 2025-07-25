<?php
session_start();
if(!isset($_SESSION['user'])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <script src="assets/chart.min.js"></script>
</head>
<body>
  <div class="container mt-5">
    <h3>Welcome <?php echo $_SESSION['user']; ?>!</h3>
    <a href="logout.php" class="btn btn-danger">Logout</a>
    <hr>
    <h4>Player Statistics</h4>
    <canvas id="myChart" width="400" height="150"></canvas>
  </div>
  <script>
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Team A', 'Team B', 'Team C'],
        datasets: [{
          label: 'Wins',
          data: [12, 19, 3],
          backgroundColor: ['red', 'blue', 'green']
        }]
      },
    });
  </script>
</body>
</html>

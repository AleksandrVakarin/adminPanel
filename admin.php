<?php require_once(__DIR__ . '/auth.php'); ?>
<!-- check authorize -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>
<body>

  <div class="container">
    <div class="row">
        <div class="col">
            <h1>Admin Panel</h1>
            <h3>Welcome, <?= $_SESSION['auth'] ?></h3>
            <a href="?do=logout">Logout</a>
        </div>
    </div>
  </div>

</body>
</html>
<?php 

session_start();
define('DIR', __DIR__); // Определение константы DIR

if (isset($_SESSION['auth'])) {
  header("Location: admin.php");
  exit;
}

if (!empty($_POST)) {
  $login = $_POST['login'];
  $password = $_POST['password'];

  $file = file(DIR . '/data/.htfile', FILE_IGNORE_NEW_LINES);
  foreach($file as $item) {
    $user = explode('|', $item);
    if ($login == $user[0]) {
      if (password_verify($password, $user[1])) {
        $_SESSION['auth'] = $user[0];
        header("Location: admin.php");
        exit;
      }
    }
  }
  $_SESSION['error'] = '<p>error</p>';
  header("Location: login.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p><a href="index.php">Home</a></p>

        <form class="autorization-form" method="POST">
          <label for="login">Login</label>
          <input id="login" type="text" name="login" placeholder="Логин">
          <label for="password">Password</label>
          <input id="password" type="password" name="password" placeholder="Пароль">
          <input type="submit" value="Войти">
        </form>

        <?php if(isset($_SESSION['error'])): ?>
          <div class="alert-danger" role="alert">
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  
</body>
</html>
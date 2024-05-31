<?php

// Memulai session
session_start();

// Mendefinisikan variabel username dan password
$username = "gustino";
$password = "ekolaksono";

// Memeriksa apakah form login telah disubmit
if (isset($_POST['username']) && isset($_POST['password'])) {
  // Mendapatkan nilai username dan password dari form
  $inputUsername = $_POST['username'];
  $inputPassword = $_POST['password'];

  // Memverifikasi username dan password
  if ($inputUsername === $username && $inputPassword === $password) {
    // Login berhasil
    $_SESSION['is_logged_in'] = true;
    header("Location: welcome.php");
    exit();
  } else {
    // Login gagal
    $error = "Username atau password salah.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>

  <?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php endif; ?>

  <form method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>
  </form>
</body>
</html>
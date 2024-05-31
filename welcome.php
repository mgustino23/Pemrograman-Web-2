<?php

// Memulai session
session_start();

// Memeriksa apakah user sudah login
if (!isset($_SESSION['is_logged_in'])) {
  header("Location: index.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
</head>
<body>
  <h1>Selamat datang!</h1>

  <a href="logout.php">Logout</a>
</body>
</html>

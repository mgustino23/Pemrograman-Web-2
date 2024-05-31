<?php

// Memulai session
session_start();

// Menghapus session
session_destroy();

// Mengarahkan ke halaman login
header("Location: index.php");
exit();

?>

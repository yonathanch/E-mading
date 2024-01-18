<?php
session_start();

//unset semua session variabel
unset($_SESSION['username']);
unset($_SESSION['id_users']);

//unset all
session_unset();

//destroy session
session_destroy(); 

//arahkan ke halaman login
header('location: ../login.php?pesan=logout');
exit();
?>
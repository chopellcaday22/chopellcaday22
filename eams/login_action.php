<?php
session_start();
// Very basic mock auth for demo; replace with DB logic
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
if ($email === 'admin@example.com' && $password === 'admin123') {
  $_SESSION['user'] = [ 'id' => 1, 'name' => 'Admin User', 'email' => $email ];
  header('Location: /eams/index.php');
  exit;
}
$_SESSION['auth_error'] = 'Invalid credentials';
header('Location: /eams/login.php');

<?php
// tangkap input login
$email = $_POST['email'];
$password = md5($_POST['password']);

$credential = [$email, $password];

include_once('koneksi.php');

$query = "SELECT * FROM users WHERE email = ? && password = ?";
$statment = $dbh->prepare($query, $credential);
$statment->execute($credential);
$result = $statment->fetch();

// validasi login
if ($result) {
    session_start(); 
    $_SESSION['name'] = $result['name'];
    $_SESSION['email'] = $result['email'];
    
    header('Location: dashboard.php');
} else {
    header("location: index.html");
}
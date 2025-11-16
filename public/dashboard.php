<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit;
}
?>

<h1>Hello Dear Welcome, <?= $_SESSION['username'] ?>!</h1>
<a href="logout.php">Logout</a>

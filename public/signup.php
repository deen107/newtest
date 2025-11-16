<?php
require_once "../src/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    if($stmt->execute([$username, $password])){
        header("Location: index.php");
        exit;
    } else {
        $error = "Signup failed!";
    }
}
?>

<form method="POST">
    <input name="username" placeholder="Username" required>
    <input name="password" type="password" placeholder="Password" required>
    <button type="submit">Signup</button>
</form>

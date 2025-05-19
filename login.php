<?php
require 'data.php';
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"],$_POST["password"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    
    $sql2 = "SELECT * FROM register WHERE email = :email AND password = :password";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute(['email' => $email, 'password' => $password]);

    if($stmt2->rowCount() > 0){
        echo "<script>alert('🚫 User déjà existe');</script>";
    } else {
        $sql = "INSERT INTO register (email, password) VALUES (:email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email, ':password' => $password]);
        echo "<script>alert('✅ User ajouté avec succès');</script>";
    }
}
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo App</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h1>To-Do App</h1>
        <p>Start organizing your life day by day</p>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <div class="password-container">
                <input type="password" name="password" placeholder="Password" required>
                <span class="toggle">&#128065;</span>
            </div>
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>

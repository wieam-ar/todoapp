<?php
require 'data.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"], $_POST["last"], $_POST["email"], $_POST["password"])) {
    $name = $_POST["name"];
    $last = $_POST["last"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO  register(name,last,email,password) VALUES(:name,:last,:email,:password) ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':name'  => $name, ':last' => $last, ':email' => $email, ':password' => $password]);
    echo "<script>alert(done)</script>";
    header("Location : login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Register</h1>

        <form action="" method="post">
            <h2>Your Name</h2>
            <input type="text" name="name" id="name" placeholder="First Name" require> <br>
            <input type="text" name="last" id="last" placeholder="Last Name" require> <br>

            <h2>Login Details</h2>
            <input type="email" name="email" id="email" placeholder="email" require> <br>
            <input type="password" name="password" id="password" placeholder="password" require> <br>
            <p>Minimum 8 characters with at least one uppercase, one lowercase, one special <br> character and a number</p>
            <Button type="submit">Register </Button>
    </div>
    </form>

    </div>


</body>

</html>
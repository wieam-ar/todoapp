<?php
$host="localhost";
$data="todo_app";
$user="root";
$port="3306";
$pass="";

try{
    $pdo= new PDO("mysql:host=$host;dbname=$data;port=$port", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  die( "Error de Connection: " . $e->getMessage());
}
?>
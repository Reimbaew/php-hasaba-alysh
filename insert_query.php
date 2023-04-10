<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "registration_pdo";

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$user_name=$_POST['user_name'];
$password1=$_POST['password'];

$conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO user_registration (first_name, last_name, user_name, password)
VALUES ('$first_name', '$last_name', '$user_name', '$password1')";

$conn->exec($sql);
echo "<script>alert('Hasab ürtinlikli döredildi'); window.location='index.php'</script>";
?>

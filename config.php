<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'users_db';

$conn = new mysqli($host, $user, $password, $database);

// ✅ Correct: if there IS an error, then die
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

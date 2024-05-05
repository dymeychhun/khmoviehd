<?php
require_once 'config/db_config.php';
require_once 'config/db_connection.php';

$sqlCommand = "SELECT * FROM movies";
$query = $conn->query($sqlCommand);

header('Content-Type: application/json');
echo json_encode($query->fetch_all(MYSQLI_ASSOC));

<?php

include 'secure.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn;
if (!$conn) {
    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
}

function query_MySQL($conn, $sql) {
    $result = mysqli_query($conn, $sql);
    if (!$result) echo "MySQL query error:<br>SQL: \"" 
        . $sql . "\"<br>Error: " . mysqli_error($conn);
    return $result;
}
?>
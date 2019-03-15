<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
include 'secure.php';
$conn = new mysqli($host, $user, $pass, "db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to MySQL successfully!<br>";

$sql = "SELECT * FROM accounts;";
$result = $conn->query($sql);

var_dump($result);
var_dump(mysqli_error($conn));

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br>id: " . $row["id"] . " - Name: " . $row["name"] . " - Pass: " . $row["pass"]. "<br>";
    }
    echo "hehehe";
}
?>
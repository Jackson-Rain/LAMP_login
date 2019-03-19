<html>
    <body>

        Welcome <?php echo $_POST["username"]; ?><br>
        Your password is: <?php echo $_POST["password"]; ?>

        <?php

include '../secure.php';
$conn = new mysqli($host, $user, $pass, "db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to MySQL successfully!<br>";

$sql = "INSERT INTO Accounts (user, pass) VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        ?>
    </body>
</html> 
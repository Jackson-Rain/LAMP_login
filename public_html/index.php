<!DOCTYPE html>

<html>
    <head>
    </head>
    <body>

        <h1>Hello Cloudreach!</h1>
        <h4>Attempting MySQL connection from php...</h4>

<?php
    include 'secure.php';
    $conn = new mysqli($host, $user, $pass, "db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected to MySQL successfully!<br>";

    $sql = "SELECT * FROM Accounts;";
    $result = $conn->query($sql);

    var_dump($result);
    var_dump(mysqli_error($conn));

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<br>id: " . $row["id"] . " - Name: " . $row["user"] . " - Pass: " . $row["pass"]. "<br>";
        }
    }

    function createAccount() {
        echo "heheheeee";
    }
    // echo "<button onclick=\"createAccount()\">Create Account</button>";

?>
        heh
        <form action="form/createAccount.php" method="post">
            Username: <input type="text" name="username"><br>
            Password: <input type="text" name="password"><br>
            <input type="submit">
        </form>
    </body>
</html>

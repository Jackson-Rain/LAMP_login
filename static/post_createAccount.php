<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="../main.css">
    <body>
        <?php 
include 'scripts/navbar.php'; 
include 'scripts/mysql.php';
        ?>
        <div class="panel">
            Welcome, <?php echo $_POST["username"]; ?>.

            <?php

# flag set to true if input doesn't meet criteria
$dont = false;

# make sure name and pass are ok
$username = $_POST["username"];
$password = $_POST["password"];
if (strlen($username) > 32) {
    echo "<p style=\"color:red;\">Account name must be shorter than 32 characters.";
    $dont = true;
}
if (strlen($username) == 0) {
    echo "<p style=\"color:red;\">Account name must be longer than 0 characters.";
    $dont = true;
}
if (strlen($password) > 32) {
    echo "<p style=\"color:red;\">Password must be shorter than 32 characters.";
    $dont = true;
}
if (strlen($password) == 0) {
    echo "<p style=\"color:red;\">Password must be longer than 0 characters.";
    $dont = true;
}

# die if account exists already
$sql = "SELECT id FROM Accounts WHERE user=\"" . $_POST["username"] . "\"";
$result = query_MySQL($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<p style=\"color:red;\">Account named '" . $_POST["username"] . "' already exists!</p>";
    $dont = true;
}

if (!$dont) {
    # insert new user
    $sql = "INSERT INTO Accounts (user, pass) VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "')";
    if (query_MySQL($conn, $sql)) {
        echo "<br>Account created successfully!";
    } else echo "<br>Account creation failure!";
}
            ?>
            <?php
if ($dont) {
    include 'scripts/form_createAccount.php';
}
            ?>
        </div>
    </body>
</html> 
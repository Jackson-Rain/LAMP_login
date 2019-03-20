<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <?php 
include 'php/navbar.php';
include 'php/mysql.php';
        ?>
        <div class="panel">

            <h1>Hello!</h1>

            <?php

# query and display accounts
$sql = "SELECT * FROM Accounts;";
$result = query_MySQL($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>id</th><th>name</th><th>pass</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["user"] . "</td><td>" . $row["pass"] . "</td></tr>";
    }
    echo "</table>";
}
            ?>
            
        </div>


        <div class="panel">
            <?php include 'php/form_login.php'; ?>
        </div>
    </body>
</html>

<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="../main.css">
    <body>
        <?php 
include 'scripts/navbar.php'; 
include 'scripts/mysql.php';
        ?>
        
        <?php

# get id for user if pass is correct
$sql = "SELECT user, pass from Accounts WHERE user=\"".$_POST["username"]."\" AND pass=\"".$_POST["password"]."\";";
$result = query_MySQL($conn, $sql) or die($conn);
$login = mysqli_num_rows($result) > 0;
if ($login) include 'scripts/game.php';
else {
    echo '<div class="panel">';
    echo '<p style="color:red;">Invalid username or password.</p>';
    include 'scripts/form_login.php';
    echo '</div>';
}
// $conn->close();
        ?>
    </body>
</html> 
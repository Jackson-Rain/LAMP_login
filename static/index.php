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

            <?php
# render a random panel of Berserk
$berserk = array(
    "https://2.bp.blogspot.com/-mYpmhq9Skb0/WZKP1SKIx-I/AAAAAAAC1as/XOAoJPwTMwcNUtycyemzouKjT-E0FcsLQCHMYBhgL/s16000/0277-004.png",
    "https://2.bp.blogspot.com/-W2Rx-Nb6ZYc/WZKP0dZ04cI/AAAAAAAC1as/YItxA8neNfciKlydkJ33wMXT_PSDSVSwACHMYBhgL/s16000/0277-001.png",
    "https://2.bp.blogspot.com/-QlEnCupt3X8/WZKQDEoys1I/AAAAAAAC1as/TD6MTTVM-XkuaDjMAVb_skQ8XFNrYJs8gCHMYBhgL/s16000/0277-031.png",
    "https://2.bp.blogspot.com/-oBjArOyG-5o/WrZrywosdMI/AAAAAAAF5Lo/REpZZicz7I4GoUS5vZuJk1e9sIKkYZCowCHMYBhgL/s16000/0355-017.png",
    "https://2.bp.blogspot.com/-mTpPHdY68n4/WZKYSJ4Y8xI/AAAAAAACpc4/r70J6FRDv5ECr9aNPs1_FodpkgRZVYqGACHMYBhgL/s16000/0324-011.png",
    
);
$panelChoice = rand(0, count($berserk)-1);
$imageStyle = "width:100%;";
echo "<img src=\"$berserk[$panelChoice]\" style=\"" . $imageStyle . "\"><br>";

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
    </body>
</html>

<?php
include 'connect.php';


$user = 'root';
$password = '';
$database = 'techies-app';
$servername='localhost:8111';

$mysqli = new mysqli($servername, $user,
                $password, $database);
 
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 

$sql = "SELECT * FROM `comments`";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CommentData</title>
    <link rel="stylesheet" href="commentData.css">
</head>
<body>
    <div class="container">
        <section>
            <table>
                <tr>
                    <th>NAME</th>
                    <th>COMMENT</th>
                    <th>EMAIL</th>
                </tr>
                <?php 
                    while($rows=$result->fetch_assoc())
                    {
                ?>
                <tr>
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['comment'];?></td>
                    <td><?php echo $rows['email'];?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </section>
        <div  style="display:flex; justify-content: space-between;">
        <a href="index.php">Log Out</a>
        <a href="homepage.php">Back to Home</a>
        </div>
    </div>
</body>
</html>
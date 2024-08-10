<?php
session_start();
include 'connect.php';


if($_SERVER['REQUEST_METHOD']=='POST'){
    $comment = $_POST['comment'];


$email = $_SESSION['email'];
$sqlData =  mysqli_query($con, "SELECT name FROM data WHERE email = '$email'");
$row = mysqli_fetch_assoc($sqlData);
$name = $row['name'];
$con = new mysqli('localhost', 'root', '', 'techies-app', 8111);
if($con){
    $sql= "insert into comments(name,comment,email)values('$name','$comment','$email')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "data inserted successfully";
        header("Location: commentData.php");
    }else{
        die(mysqli_error($con));
    }
}else{
    die(mysqli_error($con));
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techies-App</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <div class="container" id="comments">
        <form action="homepage.php" method="post">
            <div>
                <label>Comment</label>
                <textarea name="comment" id="comment" placeholder="Enter your comments"></textarea>
            </div>
            <div class="btn">
                <input type="submit" value="Submit" name="submit">
            </div>
            <a href="index.php">Log Out</a>
         </form>
    </div>
</body>
</html>
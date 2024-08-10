<?php

$con = new mysqli('localhost', 'root', '', 'techies-app', 8111);
if($con->connect_error){
    die("Failed to connect DB:".$con->connect_error);
}

if(isset($_POST['signUp'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkEmail = "SELECT * FROM data WHERE email = '$email'";
    $result = $con->query($checkEmail);
    if($result->num_rows>0){
        echo "Email Address ALready Exists!";
    }else{
        $insertQuery = "INSERT INTO data (name, email, password) VALUES ('$name', '$email', '$password')";
        if($con->query($insertQuery) === TRUE){
            header("Location: index.php");
        }else{
            echo "Error:".$con->error;
        }
    }
}

if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM data WHERE email = '$email' and password = '$password'";
    $result = $con->query($sql);
    if($result->num_rows>0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit();
    }else{
        echo "Incorrect Email or Password";
    }
}

?>
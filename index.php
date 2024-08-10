<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & SignIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signUp" style="display: none;">
        <form action="register.php" method="post">
            <h1 class="title">
                Register
            </h1>
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" required>
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter Your Email" required>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter Your password" required>
            </div>
            <div class="btn">
                <input type="submit" name="signUp" value="Submit">
            </div>
        </form>
        <hr>
        <p>Already have a account? <button id="signInButton">Sign In</button></p>
    </div>
    <div class="container" id="signIn">
        <form action="register.php" method="post">
            <h1 class="title">
                LogIN
            </h1>
            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter Your Email" required>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter Your Password" required>
            </div>
            <div class="btn">
                <input type="submit" name="signIn" value="Log IN">
            </div>
        </form>
        <hr>
        <p>Don't You have a Account yet? <button id="signUpButton">Sign Up</button></p>
    </div>




    <script src="script.js"></script>
</body>
</html>
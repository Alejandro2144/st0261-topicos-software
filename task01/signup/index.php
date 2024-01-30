<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post">
        <h2>Welcome</h2>
        <p>Register new account</p>
            <div class="input-wrapper">
                <input type="text" name="name" placeholder="Name">
            </div>
            <input class="btn" type="submit" name="signup" value="Create Account">
        </form>
        
        <?php
            include("signup.php");
        ?>
    </div>
</body>
</html>

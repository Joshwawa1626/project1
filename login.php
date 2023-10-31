<?php
session_start();

    $_SESSION;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form action="">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username">
            </div>
            <div class="input-box">
                <input type="text" placeholder="Password">
            </div>
            
            <button type="submit" class="btn">Submit</button>
            <button type="submit" class="btn2">Create Account</button>

        </form>
    </div>
</body>
</html>
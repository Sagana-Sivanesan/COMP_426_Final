<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Register</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

    <h3 style= "font-size: 60px"; "font-weight: bold";>Dino Jump</h3>

<?php
    require('db.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);

        $query    = "INSERT into `users` (username, password, email) VALUES ('$username', '" . md5($password) . "', '$email')";
        $result   = mysqli_query($conn, $query);
        
        if ($result) {
            echo "<div class='form'>
                  <h3>Registered Successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>Register</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Register</h1>

        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">

        <p class="link">
            <a href="login.php">Click to Login</a>
        </p>
    </form>
<?php
    }
?>
</body>
</html>
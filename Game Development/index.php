<!DOCTYPE html>
<html lang="en" onkeydown="jump()">
<head>
    <meta charset="UTF-8">
    <title>Game</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <a href="logout.php" style="color:#cfe7fe; font-size: 24px; position: relative; left: 90%;">Logout</a>
    <p><button class="button" onClick="window.location.reload();" style="background-color:gray; border:2px solid #dfe3e6; font-size: 20px; font-family: monospace; position: relative; left: 42% ">Click To Play</button></p>
    <div class="container">
        <h3>Time Zone</h3>
        <div id="time"></div>
        <div id="day"></div>
        <div id="timeZone"></div>
        <h3>Quote</h3>
        <div id="quote"></div>
    </div>
    <div class="game" style="border:8px solid whitesmoke; ">
        <div id="avatar"></div>
        <div id="obstacle"></div>
        <div id="obstacle1"></div>
    </div>  
    
    <?php
    require('db.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);

        $scoreSpan = stripslashes($_REQUEST['scoreSpan']);
        $scoreSpan = mysqli_real_escape_string($conn, $scoreSpan);
        
        $query    = "INSERT into `users` (username, password, email, create_datetime, scoreSpan) VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime','$scoreSpan')";
        $result   = mysqli_query($conn, $query);
        
        if ($result) {
            echo "<div class='form'>
                  <div class='score'>Score: 
                  <span id='scoreSpan'></span>
                  </div>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post" style="background-color:#cbcfd1; width: 90px; border:2px solid whitesmoke;">
        <h4 class="score_" style="text-align:center; font-family: monospace; font-size: 20px">Score</h4>
        <div class='score'> 
            <span id='scoreSpan'></span>
        </div>
    </form>
<?php
        $query    = "INSERT into `users` (username, password, email, create_datetime, scoreSpan) VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime','$scoreSpan')";

    }
?>
</body>
<script src="script.js"></script>
<script src="timeAPI.js"></script>
<script src="quoteAPI.js"></script>

</html>
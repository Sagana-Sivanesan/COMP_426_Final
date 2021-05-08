<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <p>Dashboard</p>
        <p><a href="index.php">Play</a></p>
    </div>
</body>
</html>
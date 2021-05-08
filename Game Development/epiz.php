<?php
    $server = "	sql213.epizy.com";
    $username = "epiz_28568595";
    $password = "bycouexlylyeQ7F";
    $dbname = "epiz_28568595_newoneagain";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if (!$conn) {
        die("Connection Faile:" .mysqli_connect_error());
    }

    ?>

</body>
<script src="script.js"></script>
<script src="timeAPI.js"></script>
<script src="quoteAPI.js"></script>

</html>
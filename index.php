<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>DB Connections</h2>
    <?php

    echo "<p>Start of php</p>";

    $servername = "localhost";
    $username = "steverq1_dev";
    $password = "Csci213+#006";
    $dbname = "steverq1_devdb";

    $db_conn = new mysqli($servername, $username, $password, $dbname);

    if ($db_conn->connect_error) {
        echo "Database connection failed: " . $db_conn->connect_error;
    } else {
        echo "Success<br />";
    }

        ?>
        
</body>
</html>

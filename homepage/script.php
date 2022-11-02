<?php
    include './helpers/dotenv.php';
    (new DotEnv(__DIR__ . '/../.env'))->load();

    $servername = "mariadb";
    $username = getenv('DB_USERNAME');
    $password = getenv('DB_PASSWORD');
    $dbname = getenv('DB_NAME');

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        echo "Successful connection!";
    }

    $conn->close();
?>
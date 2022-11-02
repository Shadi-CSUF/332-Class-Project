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

    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->mysql_query($sql, $conn);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
?>
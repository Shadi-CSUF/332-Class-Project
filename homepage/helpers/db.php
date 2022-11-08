<?php
    // Initialize database structure
    // ...
    // In theory, we shouldn't drop the database and create new tables and records
    // everytime a user connects to the webpage.
    // 
    // But, this makes it easier for us to make quick changes to table structure
    // without having to login to the server and type CLI commands, and also help
    // us sync table structure changes on each other's server.
    //
    // Decide to not use this function in the future?
    function initializeDB($conn, $dbname) :void {
        // Drop Tables if they already exist
        $conn->query("DROP DATABASE " . $dbname);
        $conn->query("CREATE DATABASE " . $dbname);
        $conn->query("USE " . $dbname);

        // Load all queries from file
        $sql = file_get_contents(__DIR__ .'/../../sql/tables.sql');
        if (!$conn->multi_query($sql)) { 
            echo("Error: " . $conn->error);
        }
    }
?>
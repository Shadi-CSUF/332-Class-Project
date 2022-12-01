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

        // Build tables using queries from tables.sql
        $sql = file_get_contents(__DIR__ .'/../../sql/tables.sql');
        if (!$conn->multi_query($sql)) { 
            echo("Error: " . $conn->error);
        }
        clearStoredResults($conn);

        // Insert data into tables using queries from fakeData.sql
        $sql = file_get_contents(__DIR__ .'/../../sql/fakeData.sql');
        if (!$conn->multi_query($sql)) { 
            echo("Error: " . $conn->error);
        }
        clearStoredResults($conn);
    }

    function clearStoredResults($conn) {
        do {
             if ($res = $conn->store_result()) {
               $res->free();
             }
        } while ($conn->more_results() && $conn->next_result());        
    }
?>
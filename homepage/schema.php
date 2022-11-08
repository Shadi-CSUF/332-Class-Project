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

        // Create Professors table
        $conn->query("
            CREATE TABLE Professors (
                Ssn INT PRIMARY KEY,
                Name VARCHAR(255),
                Address VARCHAR(255),
                Telephone INT,
                Sex ENUM('M', 'F'),
                Title VARCHAR(255),
                Salary INT,
                Degrees VARCHAR(255)
            );
        ");

        // Create Departments table
        $conn->query("
            CREATE TABLE Departments (
                Name VARCHAR(255) PRIMARY KEY,
                Telephone INT,
                Location VARCHAR(255),
                ChairpersonSsn INT,
                FOREIGN KEY (ChairpersonSsn) references Professors(Ssn)
            );
        ");

        // Create Courses table
        $conn->query("
            CREATE TABLE Courses (
                CourseId INT PRIMARY KEY,
                Title VARCHAR(255),
                Textbook VARCHAR(255),
                Units INT
            );
        ");

        // Create Sections table
        $conn->query("
            CREATE TABLE Sections (
                SectionId INT PRIMARY KEY,
                Classroom VARCHAR(255),
                NoOfSeats INT,
                StartTime TIME,
                EndTime TIME,
                ProfessorSsn INT,
                FOREIGN KEY (ProfessorSsn) references Professors(Ssn)
            );
        ");

        // Create Students table
        $conn->query("
            CREATE TABLE Students (
                CampusId INT PRIMARY KEY,
                Name VARCHAR(255),
                Address VARCHAR(255),
                Telephone INT,
                Sex ENUM('M', 'F')
            );
        ");

        // Create Enrollments table
        $conn->query("
            CREATE TABLE Enrollments (
                StudentId INT,
                SectionId INT,
                Grade ENUM('A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'D-', 'F'),
                FOREIGN KEY (StudentId) references Students(CampusId),
                FOREIGN KEY (SectionId) references Sections(SectionId),
                PRIMARY KEY (StudentId, SectionId)
            );
        ");
    }
?>
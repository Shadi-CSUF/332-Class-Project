CREATE TABLE Professors (
    Ssn INT PRIMARY KEY,
    Name VARCHAR(255),
    Address VARCHAR(255),
    Telephone VARCHAR(11),
    Sex ENUM('M', 'F'),
    Title VARCHAR(255),
    Salary INT,
    Degrees VARCHAR(255)
);

CREATE TABLE Departments (
    Name VARCHAR(255) PRIMARY KEY,
    Telephone VARCHAR(11),
    Location VARCHAR(255),
    ChairpersonSsn INT,
    FOREIGN KEY (ChairpersonSsn) references Professors(Ssn)
);

CREATE TABLE Courses (
    CourseId INT PRIMARY KEY,
    Title VARCHAR(255),
    Textbook VARCHAR(255),
    Units INT
);

CREATE TABLE Sections (
    SectionId INT PRIMARY KEY,
    Classroom VARCHAR(255),
    NoOfSeats INT,
    StartTime TIME,
    EndTime TIME,
    ProfessorSsn INT,
    FOREIGN KEY (ProfessorSsn) references Professors(Ssn)
);

CREATE TABLE Students (
    CampusId INT PRIMARY KEY,
    Name VARCHAR(255),
    Address VARCHAR(255),
    Telephone VARCHAR(11),
    Sex ENUM('M', 'F')
);

CREATE TABLE Enrollments (
    StudentId INT,
    SectionId INT,
    Grade ENUM('A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'D-', 'F'),
    FOREIGN KEY (StudentId) references Students(CampusId),
    FOREIGN KEY (SectionId) references Sections(SectionId),
    PRIMARY KEY (StudentId, SectionId)
);
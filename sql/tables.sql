CREATE TABLE Professors (
    Ssn INT PRIMARY KEY,
    Name VARCHAR(255),
    Address VARCHAR(255),
    Telephone VARCHAR(10),
    Sex ENUM('M', 'F'),
    Title VARCHAR(255),
    Salary INT,
    Degrees VARCHAR(255)
);

CREATE TABLE Departments (
    Name VARCHAR(255) PRIMARY KEY,
    Telephone VARCHAR(10),
    Location VARCHAR(255),
    ChairpersonSsn INT,
    FOREIGN KEY (ChairpersonSsn) references Professors(Ssn)
);

CREATE TABLE Courses (
    Id INT PRIMARY KEY,
    Title VARCHAR(255),
    Textbook VARCHAR(255),
    Units INT,
    PreReqs VARCHAR(255)
);

CREATE TABLE Sections (
    Id INT PRIMARY KEY,
    CourseId INT,
    Classroom VARCHAR(255),
    NoOfSeats INT,
    MeetingDays VARCHAR(255), 
    StartTime TIME,
    EndTime TIME,
    ProfessorSsn INT,
    FOREIGN KEY (CourseId) references Courses(Id),
    FOREIGN KEY (ProfessorSsn) references Professors(Ssn)
);

CREATE TABLE Students (
    Id INT PRIMARY KEY,
    Name VARCHAR(255),
    Address VARCHAR(255),
    Telephone VARCHAR(10),
    Sex ENUM('M', 'F'),
    StudentMajor VARCHAR(255),
    FOREIGN KEY (StudentMajor) references Departments(Name)
);

CREATE TABLE StudentMinors (
    StudentId INT,
    Minor VARCHAR(255),
    FOREIGN KEY (Minor) references Departments(Name),
    PRIMARY KEY (StudentId, Minor)
);

CREATE TABLE Enrollments (
    StudentId INT,
    SectionId INT,
    Grade ENUM('A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'D-', 'F'),
    FOREIGN KEY (StudentId) references Students(Id),
    FOREIGN KEY (SectionId) references Sections(Id),
    PRIMARY KEY (StudentId, SectionId)
);
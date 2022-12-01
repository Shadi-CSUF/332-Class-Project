-- Minimum of 3 professors according to rubric
INSERT INTO Professors
VALUES (
    123456789, 
    "Jimmy Quach", 
    "1234 Fake Street",
    "1234567890",
    "M",
    "PhD",
    999999,
    "PhD in Computer Science,BS in Computer Science"
); 

INSERT INTO Professors
VALUES (
    234567891, 
    "Paul Kennedy", 
    "1234 Fake Street",
    "1234567890",
    "M",
    "PhD",
    420,
    "PhD in Computer Science,BS in Computer Science"
); 

INSERT INTO Professors
VALUES (
    345678912, 
    "Shadi Nachat", 
    "1234 Fake Street",
    "1234567890",
    "M",
    "PhD",
    150000,
    "PhD in Computer Science,BS in Computer Science"
); 

-- Minimum of 8 students according to rubric
INSERT INTO Students VALUES (12345678,"Leila Hornsby","2136 Davis Street","7063024012","F");
INSERT INTO Students VALUES (23456781,"John Stalnaker","770 Washington Avenue","6019224616","M");
INSERT INTO Students VALUES (34567812,"Michael Spencer","778 Airplane Avenue","8608850065","M");
INSERT INTO Students VALUES (45678123,"Ernest Link","961 Coleman Avenue","7607824308","M");
INSERT INTO Students VALUES (56781234,"Kenneth Alvarado","4765 John Calvin Drive","7088497178","M");
INSERT INTO Students VALUES (67812345,"Donna Blanton","1025 Bungalow Road","4029321348","F");
INSERT INTO Students VALUES (78123456,"Dorothy Sproul","1153 Maxwell Farm Road","5402367982","F");
INSERT INTO Students VALUES (81234567,"Jessica Phelps","615 Willow Oaks Lane","3373320623","F");

-- Minimum of 2 departments according to rubric
INSERT INTO Departments
VALUES (
    "Computer Science Department",
    "1234567890",
    "CS 522",
    123456789
); 

INSERT INTO Departments
VALUES (
    "Mathematics Department",
    "1234567890",
    "MH 154",
    234567891
); 

-- Minimum of 4 courses according to rubric
INSERT INTO Courses
VALUES (
    1234, 
    "File Structure & Database", 
    "Fundamentals of Database Systems, Ramez Elmasri & Shamkant B. Navathe, Seventh Edition",
    3
); 

INSERT INTO Courses
VALUES (
    2341, 
    "Algorithm Engineering", 
    "Algorithm Design in Three Acts, Kevin Wortman, Beta Edition",
    3
); 

INSERT INTO Courses
VALUES (
    3412, 
    "Professional Ethics in Computing", 
    "Ethics for the Information Age, Michael J. Quinn, 8th Edition",
    3
); 

INSERT INTO Courses
VALUES (
    4123,
    "Statistics Applied to Natural Science", 
    "OpenIntro Statistics (OS), David Diez, Mine Çetinkaya-Rundel & Christopher Barr, Fourth Edition",
    3
); 
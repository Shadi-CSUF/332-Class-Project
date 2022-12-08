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
    3,
    "CPSC 131"
); 

INSERT INTO Courses
VALUES (
    2341, 
    "Algorithm Engineering", 
    "Algorithm Design in Three Acts, Kevin Wortman, Beta Edition",
    3,
    "MATH 270B&CPSC 131"
); 

INSERT INTO Courses
VALUES (
    3412, 
    "Professional Ethics in Computing", 
    "Ethics for the Information Age, Michael J. Quinn, 8th Edition",
    3,
    "CPSC 311"
); 

INSERT INTO Courses
VALUES (
    4123,
    "Statistics Applied to Natural Science", 
    "OpenIntro Statistics (OS), David Diez, Mine Çetinkaya-Rundel & Christopher Barr, Fourth Edition",
    3,
    "MATH 130|MATH 150B"
); 

-- Minimum of 6 sections according to rubric
INSERT INTO Sections VALUES (123456,1234,"CS 123",30,'MW','8:30','9:45',123456789); 
INSERT INTO Sections VALUES (234561,2341,"CS 124",30,'MW','10:00','11:15',123456789); 
INSERT INTO Sections VALUES (345612,2341,"CS 201",30,'TuTh','8:30','9:45',234567891); 
INSERT INTO Sections VALUES (456123,3412,"CS 224",30,'TuTh','10:00','11:15',234567891); 
INSERT INTO Sections VALUES (561234,4123,"MH 112",30,'F','19:00','21:45',345678912); 
INSERT INTO Sections VALUES (612345,1234,"CS 101",30,'S','9:00','11:45',345678912); 

-- Minimum of 20 enrollment records according to rubric
INSERT INTO Enrollments VALUES (12345678,123456,"A+"); 
INSERT INTO Enrollments VALUES (23456781,123456,"B"); 
INSERT INTO Enrollments VALUES (34567812,123456,"B-"); 
INSERT INTO Enrollments VALUES (12345678,234561,"B-"); 
INSERT INTO Enrollments VALUES (56781234,234561,"F"); 
INSERT INTO Enrollments VALUES (67812345,234561,"A-"); 
INSERT INTO Enrollments VALUES (78123456,234561,"C"); 
INSERT INTO Enrollments VALUES (78123456,345612,"A"); 
INSERT INTO Enrollments VALUES (23456781,345612,"D+"); 
INSERT INTO Enrollments VALUES (67812345,345612,"C"); 
INSERT INTO Enrollments VALUES (81234567,456123,"B-"); 
INSERT INTO Enrollments VALUES (45678123,456123,"C"); 
INSERT INTO Enrollments VALUES (81234567,612345,"A"); 
INSERT INTO Enrollments VALUES (45678123,612345,"A"); 
INSERT INTO Enrollments VALUES (34567812,612345,"C"); 
INSERT INTO Enrollments VALUES (12345678,456123,"B-"); 
INSERT INTO Enrollments VALUES (45678123,561234,"C"); 
INSERT INTO Enrollments VALUES (23456781,561234,"A"); 
INSERT INTO Enrollments VALUES (78123456,561234,"A"); 
INSERT INTO Enrollments VALUES (34567812,561234,"D"); 
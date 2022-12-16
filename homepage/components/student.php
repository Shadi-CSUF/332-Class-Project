<?php
  if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include '../helpers/dotenv.php';

    $username = getenv('DB_USERNAME');
    $password = getenv('DB_PASSWORD');
    $dbname = getenv('DB_NAME');

    // Create connection
    $conn = mysqli_connect("mariadb", $username, $password, $dbname);

    header('Content-Type: application/json; charset=utf-8');
    // Takes raw data from the request & Converts it into a PHP object
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    if ($data->query === "sections") {
      // yes, this may allow sql injections. but i am not well versed in php to do it safely. sorry.
      $SQL = '
        select
          Id, 
          Classroom, 
          MeetingDays, 
          StartTime, 
          EndTime, 
          COUNT(Enrollments.StudentId) AS NoOfStudents, 
          NoOfSeats AS MaxNoOfStudents
        from Sections 
        left join Enrollments on Sections.Id = Enrollments.SectionId
        where CourseId = "' . $data->courseNum . '"
        group by Sections.Classroom;
      ';
      $result = $conn->query($SQL);
      $rows = $result->fetch_all(MYSQLI_ASSOC);
      echo json_encode($rows);
    }
    elseif ($data->query === "courses") {
      // yes, this may allow sql injections. but i am not well versed in php to do it safely. sorry.
      $SQL = '
        select
          Courses.Id as Id,
          Title,
          Grade
        from Sections
        left join Courses on Sections.CourseId = Courses.Id
        left join Enrollments on Sections.Id = Enrollments.SectionId
        where
          Enrollments.StudentId = "' . $data->studentId . '";
      ';
      $result = $conn->query($SQL);
      $rows = $result->fetch_all(MYSQLI_ASSOC);
      echo json_encode($rows);
    }
    else{
      echo '[]';
    }
  }
  else {
    ?>
    <!-- Given a course number list the sections of the course, including the classrooms, 
    the meeting days and time, and the number of students enrolled in each section. -->
    <div class="row">
      <div class="card">
        <h5 class="card-header">List Sections by Course Number</h5>
        <div class="card-body px-4">
          <p class="card-text">The following courses are available:
            <ul>
              <li>1234 File Structure & Database</li>
              <li>2341 Algorithm Engineering</li>
              <li>3412 Professional Ethics in Computing</li>
              <li>4123 Statistics Applied to Natural Science</li>
            </ul>
          </p>
        </div>
        <div class="input-group mb-3 px-4">
          <input id="courseNum" type="text" class="form-control" placeholder="Enter Course Number">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" onclick="listSectionsByCourseId()">Query</button>
          </div>
        </div>
        <div id="sectionsList" class="table-responsive text-nowrap mb-4">
        </div>
        <script>
          function listSectionsByCourseId() {
            // payload object
            const data = {
              query: "sections",
              courseNum: document.getElementById("courseNum").value
            }
            // make the request
            fetch("components/student.php", {
              method: "POST",
              body: JSON.stringify(data),
              headers: {
                "Content-Type": "application/json; charset=UTF-8"
              }
            })
            .then((response) => response.json())
            .then((data) => {
              let rows = "";
              console.log(data);

              data.forEach((row) => {
                rows += "<tr>" + 
                          "<th><strong>"+row.Id+"</strong></th>" +
                          "<td>"+row.Classroom+"</td>" +
                          "<td>"+row.MeetingDays+"</td>" +
                          "<td>"+row.StartTime+"</td>" +
                          "<td>"+row.EndTime+"</td>" +
                          "<td>"+row.NoOfStudents+ " out of "+row.MaxNoOfStudents+"</td>" +
                        "</tr>";
              });
              if(data.length != 0) {
                document.getElementById("sectionsList").innerHTML =
                  "<div class='table-responsive text-nowrap'>" +
                    "<table class='table'>" +
                      "<thead>" +
                        "<tr>" +
                          "<th>ID</th>" +
                          "<th>CLASSROOM</th>" +
                          "<th>MEETINGDAYS</th>" +
                          "<th>STARTTIME</th>" +
                          "<th>ENDTIME</th>" +
                          "<th>STUDENTS</th>" +
                        "</tr>" +
                      "</thead>" +
                      "<tbody class='table-border-bottom-0'>" +
                        rows
                      "</tbody>" +
                    "</table>" +
                  "</div>"
                ;
              }
              else{
                document.getElementById("sectionsList").innerHTML = "No results.";
              }
            })
          }
        </script>
      </div>
    </div>
    <!-- Given the campus wide ID of a student, list all courses the student took and the grades. -->
    <div class="row py-4">
      <div class="card">
        <h5 class="card-header">List Courses and Grades by Student ID</h5>
        <div class="card-body px-4">
          <p class="card-text">Couple of student ids for functionality testing purposes:
            <ul>
              <li>12345678 Leila Hornsby</li>
              <li>23456781 John Stalnaker</li>
              <li>34567812 Michael Spencer</li>
              <li>45678123 Ernest Link</li>
            </ul>
          </p>
        </div>
        <div class="input-group mb-3 px-4">
          <input id="studentId" type="text" class="form-control" placeholder="Enter Student ID">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" onclick="listCoursesByStudentId()">Query</button>
          </div>
        </div>
        <div id="coursesList" class="table-responsive text-nowrap mb-4">
        </div>
        <script>
          function listCoursesByStudentId() {
            // payload object
            const data = {
              query: "courses",
              studentId: document.getElementById("studentId").value
            }
            // make the request
            fetch("components/student.php", {
              method: "POST",
              body: JSON.stringify(data),
              headers: {
                "Content-Type": "application/json; charset=UTF-8"
              }
            })
            .then((response) => response.json())
            .then((data) => {
              let rows = "";
              console.log(data);

              data.forEach((row) => {
                rows += "<tr>" + 
                          "<th><strong>"+row.Id+"</strong></th>" +
                          "<td>"+row.Title+"</td>" +
                          "<td>"+row.Grade+"</td>" +
                        "</tr>";
              });
              if(data.length != 0) {
                document.getElementById("coursesList").innerHTML =
                  "<div class='table-responsive text-nowrap'>" +
                    "<table class='table'>" +
                      "<thead>" +
                        "<tr>" +
                          "<th>ID</th>" +
                          "<th>COURSE</th>" +
                          "<th>GRADE</th>" +
                        "</tr>" +
                      "</thead>" +
                      "<tbody class='table-border-bottom-0'>" +
                        rows
                      "</tbody>" +
                    "</table>" +
                  "</div>"
                ;
              }
              else{
                document.getElementById("coursesList").innerHTML = "No results.";
              }
            })
          }
        </script>
      </div>
    </div>
<?php 
    }
?>
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
         Courses.Id as Id,
         Courses.Title,
         Classroom,
         MeetingDays,
         StartTime,
         EndTime
        from Sections
         left join Courses on Sections.CourseId = Courses.Id
         left join Professors on Sections.ProfessorSsn = Professors.Ssn
        where
         Professors.Ssn =  "' . $data->professorSsn . '";
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
    <!-- Given the social security number of a professor, 
    list the titles, classrooms, meeting days and time of his/her classes. -->
    <div class="row">
      <div class="card">
        <h5 class="card-header">List Sections by Professor SSN</h5>
        <div class="card-body px-4">
          <p class="card-text">Professor ssns for functionality testing purposes:
            <ul>
              <li>123456789 Jimmy Quach</li>
              <li>234567891 Paul Kennedy</li>
              <li>345678912 Shadi Nachat</li>
            </ul>
          </p>
        </div>
        <div class="input-group mb-3 px-4">
          <input id="professorSsn" type="text" class="form-control" placeholder="Enter Professor SSN">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" onclick="listSectionsByProfessorSsn()">Query</button>
          </div>
        </div>
        <div id="sectionsList" class="table-responsive text-nowrap mb-4">
        </div>
        <script>
          function listSectionsByProfessorSsn() {
            // payload object
            const data = {
              query: "sections",
              professorSsn: document.getElementById("professorSsn").value
            }
            // make the request
            fetch("components/professor.php", {
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
                          "<td>"+row.Classroom+"</td>" +
                          "<td>"+row.MeetingDays+"</td>" +
                          "<td>"+row.StartTime+"</td>" +
                          "<td>"+row.EndTime+"</td>" +
                        "</tr>";
              });
              if(data.length != 0) {
                document.getElementById("sectionsList").innerHTML =
                  "<div class='table-responsive text-nowrap'>" +
                    "<table class='table'>" +
                      "<thead>" +
                        "<tr>" +
                          "<th>ID</th>" +
                          "<th>COURSE</th>" +
                          "<th>CLASSROOM</th>" +
                          "<th>MEETINGDAYS</th>" +
                          "<th>STARTTIME</th>" +
                          "<th>ENDTIME</th>" +
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
<?php 
    }
?>
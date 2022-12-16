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

    if ($data->query === "list") {
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
    else{
      echo '[]';
    }
  }
  else {
    ?>
    <div class="row">
      <div class="card">
        <h5 class="card-header">List Sections by Course Number</h5>
        <div class="card-body px-4">
          <p class="card-text">The following courses are avaliable:
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
            <button class="btn btn-outline-secondary" type="button" onclick="listSections()">Query</button>
          </div>
        </div>
        <div id="sectionsList" class="table-responsive text-nowrap mb-4">
        </div>
        <script>
          function listSections() {
            // payload object
            const data = {
              query: "list",
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
<?php 
    }
?>
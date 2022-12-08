<div class="row">
  <div class="card">
    <h5 class="card-header">Professors Table</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>SSN</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>PHONE</th>
            <th>SEX</th>
            <th>TITLE</th>
            <th>SALARY</th>
            <th>DEGREE</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <?php 
            $SQL = "select * from Professors";
            $result = $conn->query($SQL);
            while (($row = $result->fetch_assoc()) == TRUE) { 
          ?>
            <tr>
              <th><strong><?php echo $row["Ssn"]; ?><strong></th>
              <td><?php echo $row["Name"]; ?></td>
              <td><?php echo $row["Address"]; ?></td>
              <td><?php echo $row["Telephone"]; ?></td>
              <td><?php echo $row["Sex"]; ?></td>
              <td><?php echo $row["Title"]; ?></td>
              <td>$<?php echo $row["Salary"]; ?></td>
              <td><?php echo $row["Degrees"]; ?></td>
            </tr>
          <?php 
            } 
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="row py-4">
  <div class="card">
    <h5 class="card-header">Students Table</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>PHONE</th>
            <th>SEX</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <?php 
            $SQL = "select * from Students";
            $result = $conn->query($SQL);
            while (($row = $result->fetch_assoc()) == TRUE) { 
          ?>
            <tr>
              <th><strong><?php echo $row["Id"]; ?></strong></th>
              <td><?php echo $row["Name"]; ?></td>
              <td><?php echo $row["Address"]; ?></td>
              <td><?php echo $row["Telephone"]; ?></td>
              <td><?php echo $row["Sex"]; ?></td>
            </tr>
          <?php 
            } 
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="row py-4">
  <div class="card">
    <h5 class="card-header">Departments Table</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>NAME</th>
            <th>PHONE</th>
            <th>LOCATION</th>
            <th>CHAIRPERSON SSN</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <?php 
            $SQL = "select * from Departments";
            $result = $conn->query($SQL);
            while (($row = $result->fetch_assoc()) == TRUE) { 
          ?>
            <tr>
              <th><strong><?php echo $row["Name"]; ?></strong></th>
              <td><?php echo $row["Telephone"]; ?></td>
              <td><?php echo $row["Location"]; ?></td>
              <td><?php echo $row["ChairpersonSsn"]; ?></td>
            </tr>
          <?php 
            } 
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="row py-4">
  <div class="card">
    <h5 class="card-header">Courses Table</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>TEXTBOOK</th>
            <th>UNITS</th>
            <th>PREREQS</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <?php 
            $SQL = "select * from Courses";
            $result = $conn->query($SQL);
            while (($row = $result->fetch_assoc()) == TRUE) { 
          ?>
            <tr>
              <th><strong><?php echo $row["Id"]; ?></strong></th>
              <td><?php echo $row["Title"]; ?></td>
              <td><?php echo $row["Textbook"]; ?></td>
              <td><?php echo $row["Units"]; ?></td>
              <td><?php echo $row["PreReqs"]; ?></td>
            </tr>
          <?php 
            } 
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="row py-4">
  <div class="card">
    <h5 class="card-header">Sections Table</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>COURSEID</th>
            <th>CLASSROOM</th>
            <th>NOOFSEATS</th>
            <th>MEETINGDAYS</th>
            <th>STARTTIME</th>
            <th>ENDTIME</th>
            <th>PROFESSORSSN</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <?php 
            $SQL = "select * from Sections";
            $result = $conn->query($SQL);
            while (($row = $result->fetch_assoc()) == TRUE) { 
          ?>
            <tr>
              <th><strong><?php echo $row["Id"]; ?></strong></th>
              <td><?php echo $row["CourseId"]; ?></td>
              <td><?php echo $row["Classroom"]; ?></td>
              <td><?php echo $row["NoOfSeats"]; ?></td>
              <td><?php echo $row["MeetingDays"]; ?></td>
              <td><?php echo $row["StartTime"]; ?></td>
              <td><?php echo $row["EndTime"]; ?></td>
              <td><?php echo $row["ProfessorSsn"]; ?></td>
            </tr>
          <?php 
            } 
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="row py-4">
  <div class="card">
    <h5 class="card-header">Enrollments Table</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>STUDENTID</th>
            <th>SECTIONID</th>
            <th>GRADE</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <?php 
            $SQL = "select * from Enrollments";
            $result = $conn->query($SQL);
            while (($row = $result->fetch_assoc()) == TRUE) { 
          ?>
            <tr>
              <th><strong><?php echo $row["StudentId"]; ?></strong></th>
              <td><?php echo $row["SectionId"]; ?></td>
              <td><?php echo $row["Grade"]; ?></td>
            </tr>
          <?php 
            } 
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
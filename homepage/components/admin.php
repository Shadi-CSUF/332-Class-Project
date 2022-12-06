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
            <th>CAMPUS ID</th>
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
              <th><strong><?php echo $row["CampusId"]; ?></strong></th>
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
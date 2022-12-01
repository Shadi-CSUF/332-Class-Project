<h3>Professors Table</h3>
<table class="table table-striped">
  <thead class="table-light">
  <tr>
    <th scope="col">SSN</th>
    <th scope="col">NAME</th>
    <th scope="col">ADDRESS</th>
    <th scope="col">PHONE</th>
    <th scope="col">SEX</th>
    <th scope="col">TITLE</th>
    <th scope="col">SALARY</th>
    <th scope="col">DEGREES</th>
  </tr>
  </thead>
  <tbody>

  <?php 
    $SQL = "select * from Professors";
    $result = $conn->query($SQL);
    while (($row = $result->fetch_assoc()) == TRUE) { 
  ?>
    <tr>
      <th scope="row"><?php echo $row["Ssn"]; ?></th>
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

<h3>Students Table</h3>
<table class="table table-striped">
  <thead class="table-light">
  <tr>
    <th scope="col">CAMPUS ID</th>
    <th scope="col">NAME</th>
    <th scope="col">ADDRESS</th>
    <th scope="col">PHONE</th>
    <th scope="col">SEX</th>
  </tr>
  </thead>
  <tbody>

  <?php 
    $SQL = "select * from Students";
    $result = $conn->query($SQL);
    while (($row = $result->fetch_assoc()) == TRUE) { 
  ?>
    <tr>
      <th scope="row"><?php echo $row["CampusId"]; ?></th>
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
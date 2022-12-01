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
        echo "Row: " + $row
  ?>
    <!-- TODO: build html table rows here -->
  <?php 
    } 
  ?>
  </tbody>
</table>
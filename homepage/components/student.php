<?php
  if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST') {
    header('Content-Type: application/json; charset=utf-8');
    // Takes raw data from the request & Converts it into a PHP object
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    if ($data->query === "list") {
      echo 
      '{
        "courseNum": "' . $data->courseNum . '"
      }';
    }
    else{
      echo '{}';
    }
  }
  else {?>
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
        <div class="input-group mb-3">
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
              console.log(data);
              document.getElementById("sectionsList").innerHTML = "No results.";
            })
          }
        </script>
      </div>
    </div>
<?php 
    }
?>
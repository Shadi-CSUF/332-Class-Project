<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">University Database System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li id="aView" class="nav-item active">
        <a class="nav-link" href="javascript:;" onclick="openAdminView()">Admin View</a>
      </li>
      <li id="pView" class="nav-item">
        <a class="nav-link" href="javascript:;" onclick="openProfessorView()">Professor View</a>
      </li>
      <li id="sView" class="nav-item">
        <a class="nav-link" href="javascript:;" onclick="openStudentView()">Student View</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>
  </div>
</nav>

<script>
  function openAdminView() {
    document.getElementById("aView").classList.add('active');
    document.getElementById("pView").classList.remove('active');
    document.getElementById("sView").classList.remove('active');

    document.getElementById("admin").classList.add('show');
    document.getElementById("admin").classList.add('active');
    document.getElementById("professor").classList.remove('show');
    document.getElementById("professor").classList.remove('active');
    document.getElementById("student").classList.remove('show');
    document.getElementById("student").classList.remove('active');
  }

  function openProfessorView() {
    document.getElementById("aView").classList.remove('active');
    document.getElementById("pView").classList.add('active');
    document.getElementById("sView").classList.remove('active');

    document.getElementById("admin").classList.remove('show');
    document.getElementById("admin").classList.remove('active');
    document.getElementById("professor").classList.add('show');
    document.getElementById("professor").classList.add('active');
    document.getElementById("student").classList.remove('show');
    document.getElementById("student").classList.remove('active');
  }

  function openStudentView() {
    document.getElementById("aView").classList.remove('active');
    document.getElementById("pView").classList.remove('active');
    document.getElementById("sView").classList.add('active');

    document.getElementById("admin").classList.remove('show');
    document.getElementById("admin").classList.remove('active');
    document.getElementById("professor").classList.remove('show');
    document.getElementById("professor").classList.remove('active');
    document.getElementById("student").classList.add('show');
    document.getElementById("student").classList.add('active');
  }
</script>
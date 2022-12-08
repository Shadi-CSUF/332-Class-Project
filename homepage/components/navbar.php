<!-- Dashboard -->
<li id="aView" class="menu-item active">
  <a href="javascript:;" onclick="openAdminView()" class="menu-link">
    <i class="menu-icon tf-icons bx bx-home-circle"></i>
    <div data-i18n="Analytics">Admin Dashboard</div>
  </a>
</li>
<!-- Layouts -->
<li id="sView" class="menu-item">
  <a href="javascript:;" onclick="openStudentView()" class="menu-link">
    <i class="menu-icon tf-icons bx bx-collection"></i>
    <div data-i18n="Basic">Students View</div>
  </a>
</li>
<li id="pView" class="menu-item">
  <a href="javascript:;" onclick="openProfessorView()" class="menu-link">
    <i class="menu-icon tf-icons bx bx-collection"></i>
    <div data-i18n="Basic">Professors View</div>
  </a>
</li>

<script>
  function openAdminView() {
    document.getElementById("aView").classList.add('active');
    document.getElementById("pView").classList.remove('active');
    document.getElementById("sView").classList.remove('active');

    document.getElementById("admin").classList.add('show', 'active');
    document.getElementById("professor").classList.remove('show', 'active');
    document.getElementById("student").classList.remove('show', 'active');
  }

  function openProfessorView() {
    document.getElementById("aView").classList.remove('active');
    document.getElementById("pView").classList.add('active');
    document.getElementById("sView").classList.remove('active');

    document.getElementById("admin").classList.remove('show', 'active');
    document.getElementById("professor").classList.add('show', 'active');
    document.getElementById("student").classList.remove('show', 'active');
  }

  function openStudentView() {
    document.getElementById("aView").classList.remove('active');
    document.getElementById("pView").classList.remove('active');
    document.getElementById("sView").classList.add('active');

    document.getElementById("admin").classList.remove('show', 'active');
    document.getElementById("professor").classList.remove('show', 'active');
    document.getElementById("student").classList.add('show', 'active');
  }
</script>
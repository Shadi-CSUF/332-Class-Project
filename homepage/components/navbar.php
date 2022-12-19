<!-- Dashboard -->
<li id="aView" class="menu-item active">
  <a href="javascript:;" onclick="openAdminView()" class="menu-link">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="menu-icon bi bi-house" viewBox="0 0 16 16">
      <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
    </svg>
    <div data-i18n="Analytics">Admin Dashboard</div>
  </a>
</li>
<!-- Layouts -->
<li id="sView" class="menu-item">
  <a href="javascript:;" onclick="openStudentView()" class="menu-link">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="menu-icon bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
    </svg>
    <div data-i18n="Basic">Students View</div>
  </a>
</li>
<li id="pView" class="menu-item">
  <a href="javascript:;" onclick="openProfessorView()" class="menu-link">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="menu-icon bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
    </svg>
    <div data-i18n="Basic">Professors View</div>
  </a>
</li>

<script>
  function openAdminView() {
    document.querySelectorAll('[id=aView]').forEach((i) => {
      i.classList.add('active');
    });
    document.querySelectorAll('[id=pView]').forEach((i) => {
      i.classList.remove('active');
    });
    document.querySelectorAll('[id=sView]').forEach((i) => {
      i.classList.remove('active');
    });

    document.getElementById("admin").classList.add('show', 'active');
    document.getElementById("professor").classList.remove('show', 'active');
    document.getElementById("student").classList.remove('show', 'active');
  }

  function openProfessorView() {
    document.querySelectorAll('[id=aView]').forEach((i) => {
      i.classList.remove('active');
    });
    document.querySelectorAll('[id=pView]').forEach((i) => {
      i.classList.add('active');
    });
    document.querySelectorAll('[id=sView]').forEach((i) => {
      i.classList.remove('active');
    });

    document.getElementById("admin").classList.remove('show', 'active');
    document.getElementById("professor").classList.add('show', 'active');
    document.getElementById("student").classList.remove('show', 'active');
  }

  function openStudentView() {
    document.querySelectorAll('[id=aView]').forEach((i) => {
      i.classList.remove('active');
    });
    document.querySelectorAll('[id=pView]').forEach((i) => {
      i.classList.remove('active');
    });
    document.querySelectorAll('[id=sView]').forEach((i) => {
      i.classList.add('active');
    });

    document.getElementById("admin").classList.remove('show', 'active');
    document.getElementById("professor").classList.remove('show', 'active');
    document.getElementById("student").classList.add('show', 'active');
  }
</script>
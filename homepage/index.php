<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <title>CPSC Database Project</title>
  <meta name="description" content="">
  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="https://raw.githubusercontent.com/Shadi-CSUF/335-CDN/main/CDN/boxicons.css">
  <!-- Core CSS -->
  <link rel="stylesheet" href="https://raw.githubusercontent.com/Shadi-CSUF/335-CDN/main/CDN/core.css" class="template-customizer-core-css">
  <link rel="stylesheet" href="https://raw.githubusercontent.com/Shadi-CSUF/335-CDN/main/CDN/theme-default.css" class="template-customizer-theme-css">
  <link rel="stylesheet" href="https://raw.githubusercontent.com/Shadi-CSUF/335-CDN/main/CDN/demo.css">
</head>
<body>
  <!-- php initialization -->
  <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include './helpers/dotenv.php';
    include 'app.php';
  ?>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">CONSOLE 332</span>
          </a>
          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>
        <div class="menu-inner-shadow"></div>
        <ul class="menu-inner py-1 ps">
          <!-- Navbar component -->
          <?php include "./components/navbar.php"; ?>
          
          <!-- User interface -->
          <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
          </div>
          <div class="ps__rail-y" style="top: 0px; height: 765px; right: 4px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
          </div>
        </ul>
      </aside>
      <!-- / Menu -->
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
              </div>
            </div>
            <!-- /Search -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <!-- User -->
              <!--/ User -->
            </ul>
          </div>
        </nav>
        <!-- / Navbar -->
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y tab-content">
            <div class="tab-pane fade show active" id="admin" role="tabpanel">
              <?php include './components/admin.php'; ?>
            </div>
            <div class="tab-pane fade" id="professor" role="tabpanel">
                <?php include './components/professor.php'; ?>
            </div>
            <div class="tab-pane fade" id="student" role="tabpanel">
                <?php include './components/student.php'; ?>
            </div>
          </div>
          <!-- / Content -->
          <!-- Footer -->
          <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="https://raw.githubusercontent.com/Shadi-CSUF/335-CDN/main/CDN/bootstrap.js"></script>
</body>
</html>

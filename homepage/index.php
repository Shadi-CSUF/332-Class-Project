<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <title>CPSC Database Project</title>
  <meta name="description" content="">
  <!-- Core CSS -->
  <link rel="stylesheet" href="./css/core.css" class="template-customizer-core-css">
  <link rel="stylesheet" href="./css/theme-default.css" class="template-customizer-theme-css">
  <link rel="stylesheet" href="./css/demo.css">
  <style>
    .horizontal-nav {
      display: flex;
      align-items: stretch; /* Default */
      justify-content: space-between;
      width: 100%;
      margin: 0;
      padding: 0;
    }
    .horizontal-nav > li {
      padding: 10px;
      margin: 10px;
      display: block;
      flex: 0 1 auto; /* Default */
      list-style-type: none;
      background: #fafafa;
    }
  </style>
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
          <a href="index.php" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">CONSOLE 332</span>
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
        <div class="bg-menu-theme layout-menu-toggle navbar-nav align-items-xl-center d-xl-none">
          <ul class="horizontal-nav menu-inner py-1 ps">
            <?php include "./components/navbar.php"; ?>
          </ul>
        </div>
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
  <script src="./css/bootstrap.js"></script>
</body>
</html>

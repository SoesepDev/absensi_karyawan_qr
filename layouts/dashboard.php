<?php

$folder = explode("-", $page);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="icon" href="./assets/images/logo.png" type="image/png">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/styles.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="./assets/css/custom.css" rel="stylesheet" />
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-light bg-white border-bottom" style="padding-top: 30px; padding-bottom: 30px;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Sistem Absensi Karyawan</a>
            <!-- Sidebar Toggle-->
        
            <!-- Navbar-->
            <!-- <ul class="navbar-nav me-auto ms-3">
                <li class="nav-item btn-nav">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-bars fa-fw"></i>
                    </a>
                </li>
            </ul> -->
            <ul class="navbar-nav ms-auto me-3 mb-lg-0">
                <li class="nav-item dropdown ms-4">
                    <a class="nav-link dropdown-toggle text-dark" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://cdn-icons-png.flaticon.com/256/236/236831.png" class="me-1" width="35">
                        <span style="font-size: 15px;">User Demo</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm rounded" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item py-2" href="?page=profile"><i class='bx bx-user bx-sm'></i> Profil</a></li>
                        <li><a class="dropdown-item py-2" href="?page=auth-logout"><i class='bx bx-log-out bx-sm'></i> Keluar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light bg-white border-end" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link <?= $page == "dashboard" ? "active" : ""; ?>" href="?page=dashboard">
                                <div class="sb-nav-link-icon">
                                    <i class='bx bx-line-chart-down bx-sm'></i>
                                </div>
                                Dashboard
                            </a>
                            <a class="nav-link <?= $folder[0] == "master" ? "active" : "collapsed"; ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="<?= $folder[0] == "master" ? "true" : "false"; ?>" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon">
                                    <i class='bx bx-laptop bx-sm'></i>
                                </div>
                                Master Data
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class='bx bx-chevron-down bx-sm'></i>
                                </div>
                            </a>
                            <div class="collapse <?= $folder[0] == "master" ? "show" : ""; ?>" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $page == "master-karyawan" ? "active" : ""; ?>" href="?page=master-karyawan"><i class='bx bxs-user-detail bx-sm me-2'></i> Karyawan</a>
                                    <a class="nav-link <?= $page == "master-jabatan" ? "active" : ""; ?>" href="?page=master-jabatan"><i class='bx bx-chart bx-sm me-2'></i> Jabatan</a>
                                    <a class="nav-link <?= $page == "master-shift" ? "active" : ""; ?>" href="?page=master-shift"><i class='bx bx-time bx-sm me-2'></i> Shift</a>
                                    <a class="nav-link <?= $page == "master-lokasi" ? "active" : ""; ?>" href="?page=master-lokasi"><i class='bx bx-buildings bx-sm me-2'></i> Lokasi</a>
                                    <a class="nav-link <?= $page == "master-user" ? "active" : ""; ?>" href="?page=master-user"><i class='bx bx-user bx-sm me-2'></i> User</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon">
                                    <i class='bx bx-first-aid bx-sm'></i>
                                </div>
                                Scan Absen
                            </a>
                            <a class="nav-link" href="?page=report-histori">
                                <div class="sb-nav-link-icon">
                                    <i class='bx bx-list-ol bx-sm'></i>
                                </div>
                                Histori Absen
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer bg-white border-top">
                        <div class="row d-flex align-items-center">
                            <div class="col-3">
                                <button type="button" class="btn btn-ligh btn-sm bg-light rounded pt-2 sidebarToggle">
                                    <i class='bx bx-left-arrow-alt bx-sm'></i>
                                </button>    
                            </div>
                            <div class="col-8">
                                <div class="small">Login sebagai :</div>
                                <span>Dokter</span>   
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <ol class='breadcrumb mb-4 mt-4 shadow-sm px-3 py-3 rounded'>
                            <li class='breadcrumb-item text-dark'><?= $title; ?></li>
                        </ol>
                        <?= $content ?>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted" style="margin-left: 12px;">Copyright &copy; Myklinik 2023</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <div class="sidebarClose">
            <button type="button" class="btn btn-ligh btn-sm bg-white rounded shadow-lg pt-2 sidebarToggle2">
                <i class='bx bx-right-arrow-alt bx-sm'></i>
            </button>
        </div>

    
    <script src="./assets/js/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');

    tooltipTriggerList.forEach(el => {
      new bootstrap.Tooltip(el, {
        placement: 'auto',      // Auto position
      });
    });
  });
</script>

    <script src="./assets/js/custom.js"></script>
  </body>
</html>
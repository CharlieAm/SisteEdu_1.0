<?php session_start();
if (empty($_SESSION['active'])) {
    header('location: ../');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistema Escolar</title>
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <link href="../assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/js/jquery-ui/jquery-ui.min.css">
    <script src="../assets/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Sistema Escolar</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

        <!-- Barra de navegación-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#nuevo_pass">Configuraci&oacute;n y privacidad</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="salir.php">Cerrar Sesi&oacute;n</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="usuarios.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-portrait"></i></div>
                            Usuarios
                        </a>
                        <a class="nav-link" href="carrera.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                            Carreras
                        </a>
                        <a class="nav-link" href="alumnos.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-reader"></i></div>
                            Estudiantes
                        </a>
                        <a class="nav-link" href="docentes.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                            Docentes
                        </a>
                        <a class="nav-link" href="reticula.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Retícula
                        </a>
                        <a class="nav-link" href="grupos.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-school"></i></div>
                            Grupos
                        </a> 
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid mt-2">
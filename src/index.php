<?php include_once "includes/header.php";
require "../conexion.php";
$carreras = mysqli_query($conexion, "SELECT * FROM carrera");
$totalC = mysqli_num_rows($carreras);
$grupos = mysqli_query($conexion, "SELECT * FROM grupos");
$totalG = mysqli_num_rows($grupos);
$docentes = mysqli_query($conexion, "SELECT * FROM docentes");
$totalD = mysqli_num_rows($docentes);
$alumnos = mysqli_query($conexion, "SELECT * FROM alumnos");
$totalA = mysqli_num_rows($alumnos);
?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray">Tecnol&oacute;gico de Tuxtepec</h1>
    </div>

    <!-- Fila de Contenido -->
    <div class="row">
        <a class="col-xl-3 col-md-6 mb-4" href="alumnos.php">
            <div class="card border-left-primary shadow h-100 py-2 bg-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Alumnos</div>
                            <div class="h5 mb-0 font-weight-bold text-white"><?php echo $totalA; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-lock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <!-- Fila de Docentes -->
        <a class="col-xl-3 col-md-6 mb-4" href="docentes.php">
            <div class="card border-left-success shadow h-100 py-2 bg-success">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Docentes</div>
                            <div class="h5 mb-0 font-weight-bold text-white"><?php echo $totalD; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-id-badge fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <!-- Fila de Carreras -->
        <a class="col-xl-3 col-md-6 mb-4" href="carreras.php">
            <div class="card border-left-info shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Carreras</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-white"><?php echo $totalC; ?></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <!-- Fila de Grupos -->
        <a class="col-xl-3 col-md-6 mb-4" href="grupos.php">
            <div class="card border-left-warning bg-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Grupos</div>
                            <div class="h5 mb-0 font-weight-bold text-white"><?php echo $totalG; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-paste fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>

<?php include_once "includes/footer.php"; ?>
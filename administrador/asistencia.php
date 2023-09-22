<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Administrar Usuarios</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php
    include('comunes/navbar.php');
    include('./back/connection.php');
    ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php
            include('comunes/sidebar.php');
            ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4 text-center">Administrar Asistencia</h1>
                    <br>
                    <div class="card">
                        <h5 class="card-header bg-success text-white"><i class="fa-solid fa-user fa-sm" style="color: #fafafa;"></i>&nbsp;Agregar Asistencia</h5>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="instructorAsist">Instructor:</label>
                                            <select class="form-control" name="instructorAsist" required>
                                                <option value="" hidden>Seleccione</option>
                                                <?php
                                                $consultInstructorsName = "SELECT id, CONCAT(nombre,' ',apellido) AS nombreCompleto FROM `personas` WHERE rol = 2;";
                                                $queryInstructorsName = mysqli_query($conn, $consultInstructorsName);
                                                while ($row = mysqli_fetch_array($queryInstructorsName)) {
                                                    echo "<option value=" . $row['id'] . ">" . $row['nombreCompleto'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="aprendizAsist">Aprendiz:</label>
                                            <select class="form-control" name="aprendizAsist" required>
                                                <option value="" hidden>Seleccione</option>
                                                <?php
                                                // Reemplaza este código con una consulta que obtenga la lista de aprendices
                                                $consultAprendices = "SELECT id, CONCAT(nombre,' ',apellido) AS nombreCompleto FROM `personas` WHERE rol = 12;";
                                                $queryAprendices = mysqli_query($conn, $consultAprendices);
                                                while ($row = mysqli_fetch_array($queryAprendices)) {
                                                    echo "<option value=" . $row['id'] . ">" . $row['nombreCompleto'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="estado">Estado:</label>
                                            <select class="form-control" name="statusAsist" required>
                                                <option value="" hidden>Seleccione</option>
                                                <?php
                                                // Reemplaza este código con una consulta que obtenga la lista de aprendices
                                                $consultAprendices = "SELECT id, descripcion FROM sub_items WHERE id_items = 5;";
                                                $queryAprendices = mysqli_query($conn, $consultAprendices);
                                                while ($row = mysqli_fetch_array($queryAprendices)) {
                                                    echo "<option value=" . $row['id'] . ">" . $row['descripcion'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="fecha">Fecha y Hora:</label>
                                            <input type="datetime-local" class="form-control" name="dateAsist" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <br>
                                            <label for="descripcion">Descripción:</label>
                                            <input type="text" class="form-control" name="descriptionAsist">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <br><br>
                                            <input type="submit" class="btn btn-success form-control" value="Registrar Asistencia" name="registrar_asistencia">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer bg-white">
                        </div>
                    </div>
                    <br>
                    <div class="card mb-4">
                        <div class="card-header bg-success text-white">
                            <i class="fas fa-table me-1"></i>
                            Tabla Asistencia
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tipo Documento</th>
                                        <th>Documento</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Rol</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Tipo Documento</th>
                                        <th>Documento</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Rol</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php
                include('comunes/footer.php');
                ?>
        </div>

        </main>

    </div>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
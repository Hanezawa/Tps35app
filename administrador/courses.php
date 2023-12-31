<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cursos</title>
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
                    <h1 class="mt-4 text-center">Administrar Programas
                    </h1>
                    <br>
                    <div class="card">
                        <h5 class="card-header bg-success text-white">Agregar Curso</h5>
                        <div class="card-body">
                            <form action="./back/registerCourse.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Nombre del Curso:</label>
                                            <input type="text" class="form-control" name="courseName" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Estado del Curso:</label>
                                            <select class="form-control" name="courseStatus" required>
                                                <option value="" hidden>Seleccione</option>
                                                <?php

                                                $consultStatus = "SELECT * FROM sub_items WHERE id_items = 3 ORDER BY descripcion ASC;";
                                                $queryStatus = mysqli_query($conn, $consultStatus);
                                                while ($row = mysqli_fetch_array($queryStatus)) {
                                                    echo "<option value=" . $row['id'] . ">" . $row['descripcion'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group ms-auto"><br>
                                            <input type="submit" class="btn btn-success form-control" value="Registrar"
                                                name="registerCourse">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="card mb-4">
                        <div class="card-header bg-success text-white">
                            <i class="fas fa-table me-1"></i>
                            Tabla Programas
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Curso </th>
                                        <th>Estado Curso</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Curso </th>
                                        <th>Estado Curso</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $searchCourses = "SELECT nom_programa,sub_items.descripcion AS estado FROM `programa`
                                    INNER JOIN sub_items ON programa.estado = sub_items.id
                                    WHERE sub_items.id_items = 3;" ;
                                    $queryCourses = mysqli_query($conn, $searchCourses);
                                    $count = 0;
                                    while ($row = mysqli_fetch_array($queryCourses)) {
                                        $count++; ?>
                                        <tr>
                                            <td>
                                                <?php echo $count; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['nom_programa'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['estado'] ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
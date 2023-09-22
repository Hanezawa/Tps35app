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
                    <h1 class="mt-4 text-center">Administrar instructores
                    </h1>
                    <br>
                    <div class="card">
                        <h5 class="card-header bg-success text-white">Agregar Instructores</h5>
                        <div class="card-body">
                            <form action="./back/register_instructor.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Nombre completo del Instructor:</label>
                                            <select class="form-control" name="instructorName" required>
                                                <option value="" hidden>Seleccione</option>
                                                <?php

                                                $consultInstructorsName = "SELECT id,CONCAT(nombre,' ',apellido) AS nombreCompleto FROM `personas` WHERE rol = 2;";
                                                $queryInstructorsName = mysqli_query($conn, $consultInstructorsName);
                                                while ($row = mysqli_fetch_array($queryInstructorsName)) {
                                                    echo "<option value=" . $row['id'] . ">" . $row['nombreCompleto'] . "</option>";
                                                }
                                                ?>  
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Ficha a la que pertenece:</label>
                                            <select class="form-control" name="instructorFicha" required>
                                                <option value="" hidden>Seleccione</option>
                                                <?php
                                                $consultFichaName = "SELECT fichas.id, CONCAT(programa.nom_programa,' ','-',' ', fichas.ficha) AS ficha  FROM fichas
                                                JOIN programa on fichas.id_programa = programa.id;";
                                                $queryFichaName = mysqli_query($conn, $consultFichaName);
                                                while ($row = mysqli_fetch_array($queryFichaName)) {
                                                    echo "<option value=" . $row['id'] . ">" . $row['ficha'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group ms-auto"><br>
                                            <input type="submit" class="btn btn-success form-control" value="Registrar"
                                                name="registerInstructores">
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
                            Tabla instructores
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre </th>
                                        <th>Apellido</th>
                                        <th>Ficha Asignada</th>
                                        <th># De Ficha</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre </th>
                                        <th>Apellido</th>
                                        <th>Ficha Asignada</th>
                                        <th># De Ficha</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $searchInstructors = "SELECT instructor.id,personaNom.nombre,personaApell.apellido ,fichaNom.alias, fichaNum.ficha FROM instructor
                                                          INNER JOIN personas personaNom ON instructor.id_persona = personaNom.id
                                                          INNER JOIN personas personaApell ON instructor.id_persona = personaApell.id
                                                          INNER JOIN fichas fichaNom ON instructor.id_ficha = fichaNom.id
                                                          INNER JOIN fichas fichaNum ON instructor.id_ficha = fichaNum.id;" ;
                                    $queryCourses = mysqli_query($conn, $searchInstructors);
                                    $count = 0;
                                    while ($row = mysqli_fetch_array($queryCourses)) {
                                        $count++; ?>
                                        <tr>
                                            <td>
                                                <?php echo $count; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['nombre'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['apellido'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['alias'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['ficha'] ?>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Aprendices</title>
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
                    <h1 class="mt-4 text-center">Administrar Aprendices
                    </h1>
                    <br>
                    <div class="card">
                        <h5 class="card-header bg-success text-white">Agregar Aprendices</h5>
                        <div class="card-body">
                            <form action="./back/register_aprendiz.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Nombre del Aprendiz:</label>
                                            <select class="form-control" name="aprendizName" required>
                                                <option value="" hidden>Seleccione</option>
                                                <?php

                                                $consultAprendicesName = "SELECT id,CONCAT(nombre,' ',apellido) AS nombreCompleto FROM personas WHERE rol=12;";
                                                $queryAprendicesName = mysqli_query($conn, $consultAprendicesName);
                                                while ($row = mysqli_fetch_array($queryAprendicesName)) {
                                                    echo "<option value=" . $row['id'] . ">" . $row['nombreCompleto'] . "</option>";
                                                }
                                                ?>  
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Nombre de la ficha a la que pertenece:</label>
                                            <select class="form-control" name="aprendizFicha" required>
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
                                        <div class="form-group">
                                            <label for="">Estado del Aprendiz:</label>
                                            <select class="form-control" name="aprendizStatus" required>
                                                <option value="" hidden>Seleccione</option>
                                                <?php
                                                $consultStatus = "SELECT * FROM sub_items WHERE id_items = 4 ORDER BY descripcion ASC;";
                                                $queryStatus = mysqli_query($conn, $consultStatus);
                                                while ($row = mysqli_fetch_array($queryStatus)) {
                                                    echo "<option value=" . $row['id'] . ">" . $row['descripcion'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
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
                                        <th>Ficha del Aprendiz</th>
                                        <th># De Ficha</th>
                                        <th>Estado del Aprendiz</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre </th>
                                        <th>Apellido</th>
                                        <th>Ficha del Aprendiz</th>
                                        <th># De Ficha</th>
                                        <th>Estado del Aprendiz</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $searchAprendiz = "SELECT aprendiz.id, personasNom.nombre, personasApe.apellido, fichas.alias,fichas.ficha,sub_items.descripcion FROM aprendiz
                                                          INNER JOIN personas personasNom ON aprendiz.id_persona = personasNom.id
                                                          INNER JOIN personas personasApe ON aprendiz.id_persona = personasApe.id
                                                          INNER JOIN fichas ON aprendiz.id_ficha = fichas.id
                                                          INNER JOIN sub_items ON aprendiz.estado = sub_items.id;" ;
                                    $queryAprendiz = mysqli_query($conn, $searchAprendiz);
                                    $count = 0;
                                    while ($row = mysqli_fetch_array($queryAprendiz)) {
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
                                            <td>
                                                <?php echo $row['descripcion'] ?>
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
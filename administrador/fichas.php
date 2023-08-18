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
                        <h5 class="card-header bg-success text-white">Agregar Fichas</h5>
                        <div class="card-body">
                            <form action="./back/registerFicha.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Curso al que Pertenece:</label>
                                            <select class="form-control" name="linkFichaCourse">
                                                <option value="" hidden>Seleccione</option>
                                                <?php
                                                $consultPrograms = "SELECT id, nom_programa FROM programa;";
                                                $queryPrograms = mysqli_query($conn, $consultPrograms);
                                                while ($row = mysqli_fetch_array($queryPrograms)) {
                                                    echo "<option value=" . $row['id'] . ">" . $row['nom_programa'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Numero de Ficha:</label>
                                            <input type="number" class="form-control" name="fichaNumber">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Nombre de la Ficha:</label>
                                            <input type="TEXT" class="form-control" name="fichaName">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Estado de la Ficha:</label>
                                            <select class="form-control" name="fichaStatus">
                                                <option value="" hidden>Seleccione</option>
                                                <?php

                                                $consultFicha = "SELECT * FROM sub_items WHERE id_items = 3 ORDER BY descripcion ASC;";
                                                $queryFicha = mysqli_query($conn, $consultFicha);
                                                while ($row = mysqli_fetch_array($queryFicha)) {
                                                    echo "<option value=" . $row['id'] . ">" . $row['descripcion'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group"><br>
                                            <input type="submit" class="btn btn-success form-control" value="Registrar"
                                                name="registerFicha">
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
                                        <th>Curso Al que pertenece la Ficha</th>
                                        <th>Numero - Ficha</th>
                                        <th>Nombre - Ficha</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Curso Al que pertenece la Ficha</th>
                                        <th>Numero - Ficha</th>
                                        <th>Nombre - Ficha</th>
                                        <th>Estado</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $searchFicha = "SELECT programa.nom_programa AS curso, ficha, alias, sub_items.descripcion AS estado FROM fichas
                                    INNER JOIN programa ON fichas.id_programa = programa.id
                                    INNER JOIN sub_items ON fichas.estado = sub_items.id 
                                    WHERE sub_items.id_items = 3;";
                                    $queryFicha = mysqli_query($conn, $searchFicha);

                                    $count = 0;
                                    while ($row = mysqli_fetch_array($queryFicha)) {
                                        $count++; ?>
                                        <tr>
                                            <td>
                                                <?php echo $count; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['curso'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['ficha'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['alias'] ?>
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
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
                        <h5 class="card-header bg-black text-white">Agregar Cursos</h5>
                        <div class="card-body">
                            <form action="./back/register_users.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Tipo Documento:</label>
                                            <select class="form-control" name="tipo_documento">
                                                <option value="" hidden>Seleccione</option>
                                                <?php

                                                $td_documento = "SELECT * FROM sub_items WHERE id_items = 2 ORDER BY descripcion ASC;";
                                                $query_documento = mysqli_query($conn, $td_documento);
                                                while ($row = mysqli_fetch_array($query_documento)) {
                                                    echo "<option value=" . $row['id'] . ">" . $row['descripcion'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Documento:</label>
                                            <input type="number" class="form-control" name="documento">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Nombre:</label>
                                            <input type="text" class="form-control" name="nombres">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Apellido:</label>
                                            <input type="text" class="form-control" name="apellidos">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <br>
                                        <div class="form-group">
                                            <label for="">Correo:</label>
                                            <input type="email" class="form-control" name="correo">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <br>
                                            <label for="">Telefono:</label>
                                            <input type="number" class="form-control" name="telefono">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <br>
                                        <div class="form-group">
                                            <label for="">Rol:</label>
                                            <select class="form-control" name="rol">
                                                <option value="" hidden>Seleccione</option>
                                                <?php
                                                $td_documento = "SELECT * FROM `sub_items` WHERE id_items = 1 ORDER BY descripcion ASC;";
                                                $query_documento = mysqli_query($conn, $td_documento);
                                                while ($row = mysqli_fetch_array($query_documento)) {
                                                    echo "<option value=" . $row['id'] . ">" . $row['descripcion'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <br>
                                            <label for="">Contraseña:</label>
                                            <input type="password" class="form-control" name="userPassword">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group ms-auto"><br>
                                            <input type="submit" class="btn btn-warning form-control" value="Registrar"
                                                name="registrarse">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
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
                                    <?php
                                    $searchUsers = "SELECT * FROM personas
                                    INNER JOIN sub_items AS documentos ON personas.tipo_documento = documentos.id
                                    INNER JOIN sub_items AS roles ON personas.rol = roles.id;";
                                    $queryRegister = mysqli_query($conn, $searchUsers);

                                    $count = 0; while($row = mysqli_fetch_array($queryRegister)){$count++; ?>
                                    <tr>
                                        <td><?php echo $count;?></td>
                                        <td><?php echo $row['tipo_documento'] ?></td>
                                        <td><?php echo $row['documento'] ?></td>
                                        <td><?php echo $row['nombre'] ?></td>
                                        <td><?php echo $row['apellido'] ?></td>
                                        <td><?php echo $row['correo'] ?></td>
                                        <td><?php echo $row['telefono'] ?></td>
                                        <td><?php echo $row['rol'] ?></td>
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
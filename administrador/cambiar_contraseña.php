<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cambiar Contraseña</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php
    include('comunes/navbar.php');
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
                    <h1 class="mt-4 text-center">Gestion Contraseña</h1>
                    <br>
                    <div class="card">
                        <h5 class="card-header bg-black text-white text-center">Cambiar Contraseña</h5>
                        <div class="card-body">
                            <form action="../back/actualizarContraseña.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Email:</label>
                                            <input type="email" class="form-control" name="email" id="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Contraseña Actual:</label>
                                            <input type="password" class="form-control" name="password" id="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Nueva Contraseña:</label>
                                            <input type="password" class="form-control" name="nuevaPassword">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Verificar Nueva Contraseña:</label>
                                            <input type="password" class="form-control" name="verificarNuevaPassword">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <br>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success form-control" value="Actualizar"name="actualizar">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
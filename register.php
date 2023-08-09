<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h3 class="text-center">Registro</h3>
            </div>
            <div class="card-body bg-light">
                <form action="./administrador/back/datosRegistro.php" method="post">
                    <div class="form-group mt-2">
                        <label for="user">Usuario</label>
                        <input type="text" class="form-control" name="user">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email</label>
                        <input type="mail" class="form-control" name="email">
                    </div>
                    <div class="form-group mt-2">
                        <label for="pass">Contrase&ntilde;a</label>
                        <input type="password" class="form-control" name="pass">
                    </div>
                    <div class="form-group mt-2">
                        <label for="passConfirm">Confirmar contrase&ntilde;a</label>
                        <input type="password" class="form-control" name="passConfirm">
                    </div>
                    <div class="form-group mt-4 text-center">
                        <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" name="registrarse">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Login</title>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h3 class="text-center">Iniciar Sesión</h3>
            </div>
            <div class="card-body bg-light">
                <form method="POST" action="./administrador//back//validacionLogin.php">
                    <div class="form-group mt-2">
                        <label for="user_correo">Usuario</label>
                        <input type="text" class="form-control" name="user_correo" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Contrase&ntilde;a</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group text-center mt-4">
                        <button type="submit" class="btn btn-success btn-block">Iniciar Sesión</button>
                    </div>
                </form>
                <!-- <div class="text-center">
                    <a href="olvidar_contrasena.html">¿Olvidaste tu contraseña?</a>
                </div> -->
                <!-- <div class="text-center mt-2">
                    <a href="register.php">Registrarse</a>
                </div> -->
            </div>
        </div>
    </div>
</body>

</html>
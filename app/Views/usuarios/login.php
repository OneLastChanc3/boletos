<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login & Registro</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg" style="width: 380px;">
        <div class="card-body">

            <h3 class="text-center mb-4">Bienvenido</h3>

            <!-- LOGIN -->
            <form class="mb-3">
                <h5 class="text-center">Iniciar Sesión</h5>

                <div class="mb-3">
                    <label class="form-label">Usuario</label>
                    <input type="text" class="form-control" placeholder="Usuario">
                </div>

                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Contraseña">
                </div>

                <button class="btn btn-primary w-100">
                    Entrar
                </button>
                         <a class="nav-link active" href="/boletos/public/register">registrar</a>  

            </form>

            <hr>

        </div>
    </div>
</div>

</body>
</html>

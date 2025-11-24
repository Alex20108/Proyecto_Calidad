<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-sm" style="width: 100%; max-width: 400px;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Inicio de Sesión</h3>

            <!-- Formulario estático -->
            <form>
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
                </div>

                <!-- Contraseña -->
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="********">
                </div>

            

                <!-- Botón -->
                 <center>
                    <div class="d-grid">
                        <a href="productos">
                        <button type="button" class="btn btn-primary">Iniciar Sesión</button>
                        </a>
                    </div>
                </center>
            </form>

            <div class="text-center mt-3">
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>

            <div class="text-center mt-2">
                <span>¿No tienes cuenta? <a href="#">Regístrate</a></span>
            </div>
        </div>
    </div>
</div>

</body>
</html>

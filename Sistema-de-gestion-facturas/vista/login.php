<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login | Sistema de Facturación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
        }
        .login-img {
            background: url('https://images.unsplash.com/photo-1735825764457-ffdf0b5aa5dd?q=80&w=1170&auto=format&fit=crop')
                        center/cover no-repeat;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row min-vh-100">


        <div class="col-lg-7 d-none d-lg-block login-img"></div>


        <div class="col-lg-5 d-flex align-items-center justify-content-center bg-light">
            <div class="w-75">

                <h2 class="fw-bold mb-2">Bienvenido</h2>
                <p class="text-muted mb-4">Inicia sesión para acceder al sistema</p>
                


                <form method="POST" action="index.php?accion=procesarLogin">

                    <div class="mb-3">
                        <label class="form-label">Usuario</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                            <input type="text"
                                   name="usuario"
                                   class="form-control"
                                   placeholder="Ingrese su usuario"
                                   required>
                        </div>
                    </div>


                    <div class="mb-4">
                        <label class="form-label">Contraseña</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa fa-lock"></i>
                            </span>

                            <input type="password"
                                   name="clave"
                                   id="clave"
                                   class="form-control"
                                   placeholder="Ingrese su contraseña"
                                   required>

                            <button type="button"
                                    class="input-group-text bg-white"
                                    onclick="togglePassword()">
                                <i class="fa fa-eye" id="iconoOjo"></i>
                            </button>
                        </div>
                    </div>

                    <?php if (isset($_GET['error'])): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa fa-triangle-exclamation me-2"></i>
                        Usuario o contraseña incorrectos
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif; ?>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg">
                            <i class="fa fa-right-to-bracket me-2"></i>
                            Iniciar sesión
                        </button>
                    </div>

                </form>

                

                <div class="text-center mt-4 text-muted small">
                    © <?= date('Y') ?> Sistema de Facturación
                </div>

            </div>
        </div>

    </div>
</div>


<script>
    function togglePassword() {
        const input = document.getElementById("clave");
        const icono = document.getElementById("iconoOjo");

        if (input.type === "password") {
            input.type = "text";
            icono.classList.remove("fa-eye");
            icono.classList.add("fa-eye-slash");
        } else {
            input.type = "password";
            icono.classList.remove("fa-eye-slash");
            icono.classList.add("fa-eye");
        }
    }
</script>

<?php
include __DIR__ . '/layout/footer.php';
?>

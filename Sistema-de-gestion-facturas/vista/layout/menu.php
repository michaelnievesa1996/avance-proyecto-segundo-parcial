<!-- menu.php -->
<div class="col-12 col-md-3 col-lg-2 sidebar">
    <h4 class="text-center mb-4">Facturación</h4>

    <nav class="nav flex-column">

        <a class="nav-link active" href="index.php">
            <i class="fa fa-house me-2"></i> Inicio
        </a>

        <a class="nav-link" href="/Sistema-de-gestion-facturas/index.php?accion=consultarPersonas">
            <i class="fa fa-users me-2"></i> Personas
        </a>

        <!-- Productos / Servicios con submenú -->
        <a class="nav-link d-flex justify-content-between align-items-center"
           data-bs-toggle="collapse"
           href="#menuProductos"
           role="button"
           aria-expanded="false"
           aria-controls="menuProductos">

            <span>
                <i class="fa fa-shop me-2"></i> Productos/Servicios
            </span>
            <i class="fa fa-chevron-down"></i>
        </a>

        <div class="collapse ps-3" id="menuProductos">
            <a class="nav-link" href="vista/productos/registrar.php">
                <i class="fa fa-plus me-2"></i> Registrar
            </a>

            <a class="nav-link" href="vista/productos/consultar.php">
                <i class="fa fa-list me-2"></i> Consultar
            </a>
        </div>

        <!-- Facturas con submenú -->
        <a class="nav-link d-flex justify-content-between align-items-center"
           data-bs-toggle="collapse"
           href="#menuFacturas"
           role="button"
           aria-expanded="false"
           aria-controls="menuFacturas">

            <span>
                <i class="fa fa-file-invoice me-2"></i> Facturas
            </span>
            <i class="fa fa-chevron-down"></i>
        </a>

        <div class="collapse ps-3" id="menuFacturas">
            <a class="nav-link" href="vista/facturas/registrar.php">
                <i class="fa fa-plus me-2"></i> Registrar factura
            </a>

            <a class="nav-link" href="vista/facturas/consultar.php">
                <i class="fa fa-list me-2"></i> Consultar facturas
            </a>
        </div>

    </nav>
</div>

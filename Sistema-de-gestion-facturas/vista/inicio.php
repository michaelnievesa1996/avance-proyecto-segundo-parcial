<?php
include __DIR__ . '/layout/header.php';
include __DIR__ . '/layout/menu.php';
?>


<div class="col-12 col-md-9 col-lg-10 p-0">


    <?php include __DIR__ . '/layout/topbar.php'; ?>


    <div class="contenido p-4">

        <h1 class="mb-4">Sistema de Gestión de Facturación</h1>

        <div class="card">
            <div class="card-body">
                <p>
                    Bienvenido al sistema de facturación.
                    Este sistema permite registrar, visualizar, editar y eliminar
                    facturas utilizando formularios y tablas.
                </p>

                <div class="mt-3">
                    <a href="facturas.php" class="btn btn-primary me-2">
                        Ver facturas
                    </a>
                    <a href="crear-factura.php" class="btn btn-secondary">
                        Crear factura
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include __DIR__ . '/layout/footer.php';
?>

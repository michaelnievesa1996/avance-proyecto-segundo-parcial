<?php
include "../layout/header.php";
include "../layout/menu.php";
?>

<!-- COLUMNA PRINCIPAL -->
<div class="col-12 col-md-9 col-lg-10 p-0">

    <!-- TOPBAR -->
    <?php include "../layout/topbar.php"; ?>

    <!-- CONTENIDO -->
    <div class="p-4 contenido">

        <h2 class="mb-4">Registro de Factura</h2>

        <div class="contenedor-central">

            <div class="row g-4">

                <!-- COLUMNA IZQUIERDA -->
                <div class="col-lg-8">

                    <!-- Formulario del cliente -->
                    <div class="card mb-4">
                        <div class="card-header fw-bold">Datos del Cliente</div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Nombres</label>
                                    <input type="text" class="form-control" placeholder="Ingrese el nombre" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Cédula / RUC</label>
                                    <input type="text" class="form-control" placeholder="Ej: 0956808067" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Correo</label>
                                    <input type="email" class="form-control" placeholder="correo@ejemplo.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Dirección</label>
                                    <input type="text" class="form-control" placeholder="Ej: Alborada 11ava y Calle No">
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Tabla de productos -->
                    <div class="card mb-4">
                        <div class="card-header fw-bold d-flex justify-content-between align-items-center">
                            Productos / Servicios
                            <button class="btn btn-sm btn-primary" onclick="agregarFila()">
                                <i class="fa fa-plus"></i> Agregar
                            </button>
                        </div>

                        <div class="card-body p-0">
                            <table class="table table-bordered text-center mb-0" id="tablaItems">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Subtotal</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <!-- COLUMNA DERECHA -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body text-end">
                            <p>Subtotal: $ <span id="subtotal">0.00</span></p>
                            <p>IVA 15%: $ <span id="iva">0.00</span></p>
                            <h5>Total: $ <span id="total">0.00</span></h5>

                            <button class="btn btn-success w-100 mt-3" onclick="guardarFactura()">
                                <i class="fa fa-save"></i> Registrar Factura
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- FACTURAS REGISTRADAS -->
            <div class="card mt-5">
                <div class="card-header fw-bold">Facturas Registradas</div>
                <div class="card-body">
                    <table class="table table-bordered text-center" id="tablaFacturas">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nombres</th>
                                <th>Subtotal</th>
                                <th>IVA</th>
                                <th>Total</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include "../layout/footer.php"; ?>

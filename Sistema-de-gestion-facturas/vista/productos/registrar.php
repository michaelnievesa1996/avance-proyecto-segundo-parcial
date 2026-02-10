<?php
    include "../layout/header.php";
    include "../layout/menu.php";
?>

<div class="col-12 col-md-9 col-lg-10 contenido">

    <h2 class="mb-4">Gestión de Productos</h2>

    <div class="contenedor-central">

        <!-- Formulario de registro -->
        <div class="card mb-4">
            <div class="card-body">

                <form method="POST" action="../../index.php?accion=guardarProducto">

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Tipo</label>
                            <select name="tipo" class="form-select" required>
                                <option value="">-- Seleccione --</option>
                                <option value="Producto">Producto</option>
                                <option value="Servicio">Servicio</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nombre del producto</label>
                            <input type="text" name="nombre" class="form-control"
                                   placeholder="Ej: Laptop Lenovo ThinkPad"
                                   required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Precio</label>
                            <input type="number" name="precio" class="form-control"
                                   step="0.01" min="0"
                                   placeholder="Ej: 950.00"
                                   required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control"
                                   min="0"
                                   placeholder="Ej: 10"
                                   required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Estado</label>
                            <select name="estado" class="form-select">
                                <option value="1" selected>Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea name="descripcion" class="form-control"
                                  rows="3"
                                  placeholder="Descripción del producto"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save me-1"></i> Registrar
                        </button>

                        <a href="../../index.php?accion=consultarProductos"
                           class="btn btn-secondary">
                            Volver
                        </a>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

<?php
    include "../layout/footer.php";
?>
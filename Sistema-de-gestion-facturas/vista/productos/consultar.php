<?php
require_once __DIR__ . '/../layout/header.php';
require_once __DIR__ . '/../layout/menu.php';
?>           


<div class="col-12 col-md-9 col-lg-10 contenido">


    <div class="d-flex justify-content-between mb-3">
        <h3 class="mb-0">Consultar Productos / Servicios</h3>


        <div class="d-flex gap-2 mt-4">

            <a href="registrar.php" class="btn btn-success" style="width:40px;height:40px;">
                <i class="fa fa-plus"></i>
            </a>

            <button class="btn btn-danger" style="width:40px;height:40px;">
                <i class="fa fa-file-pdf"></i>
            </button>

            <button class="btn btn-success" style="width:40px;height:40px;">
                <i class="fa fa-file-excel"></i>
            </button>
        </div>
    </div>

    <div class="contenedor-central">


        <div class="card mb-3">
            <div class="card-body">

                <div class="row align-items-end g-2">

     
                    <div class="col-12 col-md-3">
                        <label class="form-label mb-1">Nombre</label>
                        <input type="text" class="form-control" placeholder="Buscar por nombre">
                    </div>

                    <div class="col-12 col-md-3">
                        <label class="form-label mb-1">Tipo</label>
                        <select class="form-select">
                            <option value="">Todos</option>
                            <option value="producto">Producto</option>
                            <option value="servicio">Servicio</option>
                        </select>
                    </div>


                    <div class="col-12 col-md-3">
                        <label class="form-label mb-1">Estado</label>
                        <select class="form-select">
                            <option value="">Todos</option>
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                    </div>

             
                    <div class="col-12 col-md-3">
                        <button class="btn btn-primary w-100">
                            <i class="fa fa-search me-1"></i> Buscar
                        </button>
                    </div>

                </div>

            </div>
        </div>

  
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover text-center" id="tablaProductos">
                    <thead class="table-dark">
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Precio</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($productos)) : ?>
                        <?php foreach ($productos as $p) : ?>
                            <tr>
                                <td><?= $p['id'] ?></td>
                                <td><?= htmlspecialchars($p['nombre']) ?></td>
                                <td><?= $p['tipo'] ?? 'Producto' ?></td>
                                <td><?= number_format($p['precio'], 2) ?></td>
                                <td>
                                    <?= $p['estado'] ? 'Activo' : 'Inactivo' ?>
                                </td>
                                <td>
                                    <a href="editar.php?id=<?= $p['id'] ?>" class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn btn-danger btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalEliminar">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="6" class="text-center text-muted">
                                No hay registros para mostrar
                            </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
</div>
</div>

<!-- Modal para confirmar eliminación -->
<div class="modal fade" id="modalEliminar" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">
                    <i class="fa fa-triangle-exclamation me-2"></i>
                    Confirmar eliminación
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <p class="mb-0">
                    ¿Está seguro que desea eliminar este registro?<br>
                    <strong>Esta acción no se puede deshacer.</strong>
                </p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancelar
                </button>
                <button type="button" class="btn btn-danger">
                    <i class="fa fa-trash me-1"></i> Eliminar
                </button>
            </div>

        </div>
    </div>
</div>

<?php
require_once __DIR__ . '/../layout/footer.php';
?>

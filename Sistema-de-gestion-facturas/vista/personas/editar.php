<?php
include __DIR__ . '/../layout/header.php';
include __DIR__ . '/../layout/menu.php';
?>

<div class="col-12 col-md-9 col-lg-10 p-0">

    <?php include __DIR__ . '/../layout/topbar.php'; ?>

    <div class="contenido p-4">

        <h3 class="mb-4">Editar Persona</h3>

        <div class="card shadow-sm">
            <div class="card-body">

                <form action="index.php?accion=actualizarPersona" method="POST">


                    <input type="hidden" name="cedula" value="<?= $persona['cedula'] ?>">

                    <div class="row">

                  
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Cédula</label>
                            <input type="text" class="form-control"
                                   value="<?= $persona['cedula'] ?>" disabled>
                        </div>

                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Rol</label>
                            <select name="rol" class="form-select" required>
                                <option value="">Seleccione</option>
                                <option value="Cliente" <?= $persona['rol'] == 'Cliente' ? 'selected' : '' ?>>
                                    Cliente
                                </option>
                                <option value="Empleado" <?= $persona['rol'] == 'Empleado' ? 'selected' : '' ?>>
                                    Empleado
                                </option>
                                <option value="Proveedor" <?= $persona['rol'] == 'Proveedor' ? 'selected' : '' ?>>
                                    Proveedor
                                </option>
                            </select>
                        </div>


                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control"
                                   value="<?= $persona['nombre'] ?>" required>
                        </div>

                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Apellido</label>
                            <input type="text" name="apellido" class="form-control"
                                   value="<?= $persona['apellido'] ?>" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Correo</label>
                            <input type="email" name="correo" class="form-control"
                                   value="<?= $persona['correo'] ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="text" name="telefono" class="form-control"
                                   value="<?= $persona['telefono'] ?>">
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Dirección</label>
                            <input type="text" name="direccion" class="form-control"
                                   value="<?= $persona['direccion'] ?>">
                        </div>

                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary me-2">
                            Actualizar
                        </button>

                        <a href="../../index.php?accion=consultarPersonas" 
                           class="btn btn-secondary">
                            Cancelar
                        </a>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

<?php
include __DIR__ . '/../layout/footer.php';
?>

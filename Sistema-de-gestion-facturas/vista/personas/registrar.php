<?php
    include "../layout/header.php";
    include "../layout/menu.php";
?> 

<div class="col-12 col-md-9 col-lg-10 contenido">

    <h2 class="mb-4">Gestión de Personas</h2>

    <div class="contenedor-central">

        <!-- Formulario de registro -->
        <div class="card mb-4">
            <div class="card-body">

                <form method="POST" action="../../index.php?accion=guardarPersona">

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Cédula</label>
                            <input type="text" name="cedula" class="form-control" 
                                   placeholder="Ej: 0956808067" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Correo</label>
                            <input type="email" name="correo" class="form-control" 
                                   placeholder="correo@ejemplo.com">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" 
                                   placeholder="Ingrese el nombre" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Apellido</label>
                            <input type="text" name="apellido" class="form-control" 
                                   placeholder="Ingrese el apellido" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Teléfono</label>
                            <input type="text" name="telefono" class="form-control" 
                                   placeholder="Ej: 0995267842">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Rol</label>
                            <select name="rol" class="form-select" required>
                                <option value="">Seleccione</option>
                                <option value="Cliente">Cliente</option>
                                <option value="Empleado">Empleado</option>
                                <option value="Proveedor">Proveedor</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Dirección</label>
                        <input type="text" name="direccion" class="form-control" 
                               placeholder="Ej: Alborada 11ava y Calle No">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save me-1"></i> Registrar
                        </button>

                        <a href="../../index.php?accion=consultarPersonas" 
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

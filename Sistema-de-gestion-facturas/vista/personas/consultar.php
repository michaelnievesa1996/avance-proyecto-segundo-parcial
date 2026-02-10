<?php 
include __DIR__ . '/../layout/header.php';
include __DIR__ . '/../layout/menu.php';


?>

<div class="col-12 col-md-9 col-lg-10 contenido">

    <h3 class="mb-4">Consulta de Personas</h3>

    <div class="contenedor-central">
        <div class="card">
            <div class="card-body">

                <table class="table table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Rol</th>
                            <th>Acción</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($personas as $p): ?>
                            <tr>
                                <td><?= $p['cedula'] ?></td>
                                <td><?= $p['nombre'] ?></td>
                                <td><?= $p['apellido'] ?></td>
                                <td><?= $p['correo'] ?></td>
                                <td><?= $p['telefono'] ?></td>
                                <td><?= $p['direccion'] ?></td>
                                <td><?= $p['rol'] ?></td>
                                <td>
                                    <a href="/Sistema-de-gestion-facturas/index.php?accion=editarPersona&cedula=<?= $p['cedula'] ?>" 
                                    class="btn btn-warning btn-sm">
                                        Editar
                                    </a>

                                    <a href="/Sistema-de-gestion-facturas/index.php?accion=eliminarPersona&cedula=<?= $p['cedula'] ?>" 
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Seguro que desea eliminar?');">
                                        Eliminar
                                    </a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>

<h2 class="text-center">Listado de Informes de Aprendizaje</h2>

<!-- Botón primary alineado a la derecha -->
<div class="d-flex justify-content-end mb-3">
    <a href="<?php echo site_url('InformesAprendizaje/agregar'); ?>" class="btn btn-primary">Agregar Informe</a>
</div>

<!-- Tabla para listar los informes -->
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Codigo</th>
            <th>Estudiante</th>
            <th>Materia</th>
            <th>Promedio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($informes): ?>
            <?php foreach ($informes as $informe): ?>
                <tr>
                    <td><?php echo $informe->codigo_ia; ?></td>
                    <td><?php echo $informe->fk_codigo_est; ?></td>
                    <td><?php echo $informe->fk_codigo_mat; ?></td>
                    <td><?php echo $informe->promedio_quimestral_ia; ?></td>
                    <td>
                        <!-- Botones Editar y Eliminar -->
                        <a href="<?php echo site_url('InformesAprendizaje/editar/' . $informe->codigo_ia); ?>" class="btn btn-warning">Editar</a>
                        <a href="<?php echo site_url('InformesAprendizaje/eliminar/' . $informe->codigo_ia); ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este informe?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">No hay informes disponibles</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
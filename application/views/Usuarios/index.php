<h2 class="text-center">Listado de Usuarios</h2>

<div class="d-flex justify-content-end mb-3">
    <a href="<?php echo site_url('Usuarios/agregar'); ?>" class="btn btn-primary">Agregar Usuario</a>
</div>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Username</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($usuarios): ?>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario->codigo_usu; ?></td>
                    <td><?php echo $usuario->nombre_usu . ' ' . $usuario->apellido_usu; ?></td>
                    <td><?php echo $usuario->username_usu; ?></td>
                    <td><?php echo $usuario->email_usu; ?></td>
                    <td>
                        <a href="<?php echo site_url('Usuarios/editar/' . $usuario->codigo_usu); ?>" class="btn btn-warning">Editar</a>
                        <a href="<?php echo site_url('Usuarios/eliminar/' . $usuario->codigo_usu); ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">No hay usuarios disponibles</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
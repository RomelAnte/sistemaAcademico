<h2 class="text-center">Nuevo Usuario</h2>
<br>
<form action="<?php echo site_url('Usuarios/agregar') ?>" method="post" enctype="multipart/form-data">
    <div class='row'>
        <div class='col-md-4'>
            <label for="cedula_usu" class=form-label>Cédula:</label>
            <input type="text" class='form-control' name="cedula_usu" id="cedula_usu" required>
            <br>
            <label for="username_usu" class=form-label>Usuario:</label>
            <input type="text" class='form-control' name="username_usu" id="username_usu" required>
            <br>
            <label for="perfil_usu" class=form-label>Perfil:</label>
            <select class='form-control' name="perfil_usu" id="perfil_usu">
                <option value=''>-- Seleccione una opción --</option>
                <option value="ADMINISTRADOR">Administrador</option>
                <option value="DOCENTE">Docente</option>
                <option value="REPRESENTANTE">Representante</option>
            </select>
            <br>
            <label for="email_usu" class=form-label>Email:</label>
            <input type="email" class='form-control' name="email_usu" id="email_usu" required>
            <br>
        </div>
        <div class='col-md-4'>
            <label for="nombre_usu" class=form-label>Nombre:</label>
            <input type="text" class='form-control' name="nombre_usu" id="nombre_usu" required>
            <br>
            <label for="password_usu" class=form-label>Contraseña:</label>
            <input type="password" class='form-control' name="password_usu" id="password_usu" required>
            <br>
            <label for="telefono_usu" class=form-label>Teléfono:</label>
            <input type="tel" class='form-control' name="telefono_usu" id="telefono_usu">
            <br>
            <label for="parentesco_usu" class=form-label>Parentesco:</label>
            <input type="text" class='form-control' name="parentesco_usu" id="parentesco_usu">
            <br>            
        </div>
        <div class='col-md-4'>
            <label for="apellido_usu" class=form-label>Apellido:</label>
            <input type="text" class='form-control' name="apellido_usu" id="apellido_usu" required>
            <br>   
            <label for="estado_usu" class=form-label>Estado:</label>
            <select class='form-control' name="estado_usu" id="estado_usu">
                <option value=''>-- Seleccione una opción --</option>
                <option value=1>Activo</option>
                <option value=0>Inactivo</option>
            </select>
            <br>    
            <label for="dece_usu" class=form-label>DECE:</label>
            <select class='form-control' name="dece_usu" id="dece_usu">
                <option value=''>-- Seleccione una opción --</option>
                <option value='SI'>SI</option>
                <option value='NO'>NO</option>
            </select>
            <br>
        </div>
    </div>
    <button type="submit" class='btn btn-primary'>Enviar</button>
</form>

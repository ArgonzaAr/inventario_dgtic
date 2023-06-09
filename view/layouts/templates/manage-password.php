<h2 class="titulo mb-4">Cambiar Contraseña</h2>
<div class="container text-center">
    <form action="" class="formulario g-3 needs-validation" novalidate>
        <div class="mb-3 col ">
            <label for="newPasword" class="form-label">Contraseña Anterior</label>
            <div class="col-md-6 offset-md-3">
                <input type="text" class="form-control" placeholder="Contraseña anterior" required>
                <div class="invalid-feedback">
                    Es necesario escribir la contraseña anterior.
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="oldPassword" class="form-label">Nueva Contraseña</label>
            <div class="col-md-6 offset-md-3">
                <input type="password" class="form-control" placeholder="Nueva Contraseña" required>
                <div class="invalid-feedback">
                    Es necesario escribir una contraseña nueva.
                </div>
            </div>
        </div>
        <div class="mb-4">
            <label for="newPasword" class="form-label">Confirmar contraseña</label>
            <div class="col-md-6 offset-md-3">
                <input type="password" class="form-control" placeholder="Confirmar Contraseña" required>
                <div class="invalid-feedback">
                    Es necesario confirmar la contraseña
                </div>
            </div>
        </div>
        <div class="row g-4 mb-4">
            <div class="col-md-6 offset-md-3">
                <input class="form-control" type="text" value="Captcha" aria-label="Captcha" disabled readonly>
            </div>
        </div>
        <div class="row g-3 mb-3">
            <div class="col-md-12">
                <label for="CrearUsuario"> </label>
                <input name="CrearUsuario" class="btn btn-primary botonCreateuser" type="submit" value="Cambiar Contraseña">
            </div>
        </div>
    </form>
    <script src="/inventario_dgtic/controllers/validation/js/form-validation-empty.js"></script>
</div>
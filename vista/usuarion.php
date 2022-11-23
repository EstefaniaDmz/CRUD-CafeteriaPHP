<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Usuario</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
    <label for="txtNom" class="form-label">Nombre:</label>
    <input type="text" id="txtNom" name="nom" class="form-control"/>

    <label for="txtApP" class="form-label">Apellido paterno:</label>
    <input type="text" id="txtApP" name="apellidoP" class="form-control"/>

    <label for="txtApM" class="form-label">Apellido materno:</label>
    <input type="text" id="txtApM" name="apellidoM" class="form-control"/>

    <label for="txtCorr" class="form-label">Correo:</label>
    <input type="email" id="txtCorr" name="correo" class="form-control"/>

    <label for="txtPass" class="form-label">Clave:</label>
    <input type="password" id="txtPass" name="pass" class="form-control"/>


</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
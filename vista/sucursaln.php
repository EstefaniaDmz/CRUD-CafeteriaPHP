<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Sucursal</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
    <label for="txtNom" class="form-label">Nombre:</label>
    <input type="text" id="txtNom" name="nom" class="form-control"/>

    <label for="txtCal" class="form-label">Calle:</label>
    <input type="text" id="txtCal" name="calle" class="form-control"/>

    <label for="txtTel" class="form-label">Teléfono:</label>
    <input type="number" id="txtTel" name="tel" class="form-control"/>

    <label for="txtIdAs" class="form-label">Id Asentamiento:</label>
    <input type="number" id="txtIdAs" name="idAse" class="form-control"/>

</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Platillo</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
    <label for="txtNom" class="form-label">Nombre:</label>
    <input type="text" id="txtNom" name="nom" class="form-control"/>

    <label for="txtDes" class="form-label">Descripción:</label>
    <input type="text" id="txtDes" name="desc" class="form-control"/>

    <label for="txtCos" class="form-label">Costo:</label>
    <input type="number" id="txtCos" name="cos" class="form-control" step="any"/>

    <label for="txtidT" class="form-label">Id Tipo Platillo:</label>
    <input type="number" id="txtidT" name="idTi" class="form-control"/>


</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
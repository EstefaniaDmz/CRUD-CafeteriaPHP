<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Municipio</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
    <label for="txtNom" class="form-label">Nombre:</label>
    <input type="text" id="txtNom" name="nom" class="form-control"/>

    <label for="txtCod" class="form-label">Código:</label>
    <input type="number" id="txtCod" name="cod" class="form-control"/>

    <label for="txtidE" class="form-label">Id Estado:</label>
    <input type="number" id="txtidE" name="idEst" class="form-control"/>


</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
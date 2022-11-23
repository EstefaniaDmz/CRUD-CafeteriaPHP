<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Descuento Venta</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
    <label for="txtiddes" class="form-label">Id Descuento:</label>
    <input type="number" id="txtiddes" name="iddes" class="form-control"/>

    <label for="txtidve" class="form-label">Id Venta:</label>
    <input type="number" id="txtidve" name="idven" class="form-control"/>

</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
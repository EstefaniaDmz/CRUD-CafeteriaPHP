<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Compra</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
    <label for="txtref" class="form-label">Referencia:</label>
    <input type="text" id="txtref" name="refer" class="form-control"/>

    <label for="txtPre" class="form-label">Precio:</label>
    <input type="number" id="txtPre" name="precio" step="any" class="form-control"/>

    <label for="txtDat" class="form-label">Fecha:</label>
    <input type="text" id="txtDat" name="fecha" class="form-control" placeholder="aaaa/mm/dd hh:mm:ss"/>

    <label for="txtidPr" class="form-label">Id Proveedor:</label>
    <input type="number" id="txtidPr" name="idprov" class="form-control"/>

</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
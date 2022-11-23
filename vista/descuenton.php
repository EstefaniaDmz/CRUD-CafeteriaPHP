<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Descuento</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
    <label for="txtnom" class="form-label">Nombre:</label>
    <input type="text" id="txtnom" name="nom" class="form-control"/>

    <label for="txtdes" class="form-label">Descripción:</label>
    <input type="text" id="txtdes" name="desc" class="form-control"/>

    <label for="txtPor" class="form-label">Porcentaje:</label>
    <input type="number" id="txtPor" name="porc" min="1" max="100" class="form-control"/>

</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
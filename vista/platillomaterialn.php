<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Platillo Material</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
    <label for="txtidpla" class="form-label">Id Platillo:</label>
    <input type="number" id="txtidpla" name="idpla" class="form-control"/>

    <label for="txtidmat" class="form-label">Id Material:</label>
    <input type="number" id="txtidmat" name="idmat" class="form-control"/>

</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
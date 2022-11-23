<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Vehículo</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
<label for="txtNum" class="form-label">Número:</label>
    <input type="text" id="txtNum" name="num" class="form-control"/>

    <label for="txtDes" class="form-label">Descripción:</label>
    <input type="text" id="txtDes" name="des" class="form-control"/>

    <label for="txtTr" class="form-label">Id Trabajador:</label>
    <input type="text" id="txtTr" name="idTr" class="form-control"/>

</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Almácen</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
    <label for="txtNum" class="form-label">Número:</label>
    <input type="text" id="txtNum" name="num" class="form-control"/>

    <label for="txtCap" class="form-label">Capacidad:</label>
    <input type="number" id="txtCap" name="cap" class="form-control"/>

</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
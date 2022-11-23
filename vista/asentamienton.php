<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Asentamiento</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
    <label for="txtNom" class="form-label">Nombre:</label>
    <input type="text" id="txtNom" name="nombre" class="form-control"/>

    <label for="txtCp" class="form-label">Código postal:</label>
    <input type="txt" id="txtCp" name="codigopostal" maxlength="5" class="form-control"/>
    
    <label for="txtid" class="form-label">ID:</label>
    <input type="number" id="txtid" name="id" class="form-control"/>

    <label for="txtTip" class="form-label">Id Tipo de Asentamiento:</label>
    <input type="number" id="txtTip" name="idtipoas" class="form-control"/>

    <label for="txtMuni" class="form-label">Id Municipio:</label>
    <input type="number" id="txtMuni" name="idmuni" class="form-control"/>

    <label for="txtZon" class="form-label">Id Zona:</label>
    <input type="number" id="txtZon" name="idzona" class="form-control"/>
    
</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
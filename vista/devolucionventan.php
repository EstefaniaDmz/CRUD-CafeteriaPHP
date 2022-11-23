<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Devolución Venta</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
    <label for="txtArt" class="form-label">Platillo:</label>
    <input type="text" id="txtArt" name="art" class="form-control"/>

    <label for="txtRaz" class="form-label">Razón:</label>
    <input type="text" id="txtRaz" name="raz" class="form-control"/>

    <label for="txtCant" class="form-label">Cantidad:</label>
    <input type="number" id="txtCant" name="cant" class="form-control"/>

    <label for="txtCos" class="form-label">Costo:</label>
    <input type="number" id="txtCos" name="cost" step="any" class="form-control"/>

    <label for="txtidc" class="form-label">Id Venta:</label>
    <input type="number" id="txtidc" name="idcom" class="form-control"/>

</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
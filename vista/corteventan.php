<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Corte Venta</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
    <label for="txtDat" class="form-label">Fecha:</label>
    <input type="text" id="txtDat" name="fecha" class="form-control" placeholder="aaaa/mm/dd hh:mm:ss"/>

    <label for="txtcaj" class="form-label">Caja:</label>
    <input type="text" id="txtref" name="caja" class="form-control"/>

    <label for="txtVen" class="form-label">Venta:</label>
    <input type="number" id="txtVen" name="ven" step="any" class="form-control"/>

    <label for="txtGas" class="form-label">Gasto:</label>
    <input type="number" id="txtGas" name="gas" step="any" class="form-control"/>

    <label for="txtTar" class="form-label">Tarjeta:</label>
    <input type="number" id="txtTar" name="tar" step="any" class="form-control"/>

    <label for="txtidTra" class="form-label">Id Trabajador:</label>
    <input type="text" id="txtidTra" name="idTra" class="form-control"/>

</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
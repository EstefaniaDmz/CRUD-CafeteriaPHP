<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Asistencia</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
    <label for="txtFec" class="form-label">Fecha:</label>
    <input type="date" id="txtFec" name="fecha" class="form-control"/>

    <label for="txtHL" class="form-label">Hora llegada:</label>
    <input type="time" id="txtHL" name="horaL" class="form-control"/>

    <label for="txtHS" class="form-label">Hora salida:</label>
    <input type="time" id="txtHS" name="horaS" class="form-control"/>

    <label for="txtTra" class="form-label">Id Trabajador:</label>
    <input type="number" id="txtTra" name="idTr" class="form-control"/>
    
</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Material</h1></figure>
<form action="" method="get" class="col-12" target="_blank">
    <label for="txtNom" class="form-label">Nombre:</label>
    <input type="text" id="txtNom" name="nom" class="form-control"/>

    <label for="txtDes" class="form-label">Descripción:</label>
    <input type="text" id="txtDes" name="des" class="form-control"/>

    <label for="txtPre" class="form-label">Precio:</label>
    <input type="number" id="txtPre" name="pre" class="form-control" step="any"/>

    <label for="txtCant" class="form-label">Cantidad:</label>
    <input type="number" id="txtCant" name="cant" class="form-control"/>

    <label for="txtidAl" class="form-label">Id Almacén:</label>
    <input type="number" id="txtidAl" name="idAl" class="form-control"/>

    <label for="txtidCom" class="form-label">Id Compra:</label>
    <input type="number" id="txtidCom" name="idCom" class="form-control"/>
    

</br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" id="btnSave" value="Guardar"/>
</div>

<input type="hidden" name="m" value="guardar"/>
</form>
<?php
require_once("layouts/footer.php");
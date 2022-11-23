<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Proveedor</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
<label for="txtNom" class="form-label">Nombre:</label>
    <input type="text" id="txtNom" name="nom" class="form-control" value="<?php echo $v['nombre']; ?>"/>

    <label for="txtApP" class="form-label">Apellido paterno:</label>
    <input type="text" id="txtApP" name="apellidoP" class="form-control" value="<?php echo $v['apellidoPaterno']; ?>"/>

    <label for="txtApM" class="form-label">Apellido materno:</label>
    <input type="text" id="txtApM" name="apellidoM" class="form-control" value="<?php echo $v['apellidoMaterno']; ?>"/>

    <label for="txtR" class="form-label">RFC:</label>
    <input type="text" id="txtR" name="rfc" class="form-control" value="<?php echo $v['rfc']; ?>"/>

    <label for="txtCorr" class="form-label">Correo:</label>
    <input type="email" id="txtCorr" name="correo" class="form-control" value="<?php echo $v['correo']; ?>"/>

    <label for="txtTel" class="form-label">Teléfono:</label>
    <input type="number" id="txtTel" name="tel" class="form-control" value="<?php echo $v['telefono']; ?>"/>

    <label for="txtIdAse" class="form-label">Id Tipo Asentamiento:</label>
    <input type="number" id="txtIdAse" name="idAse" class="form-control" value="<?php echo $v['idAsentamiento']; ?>"/>

    <label for="txtIdTip" class="form-label">Id Tipo Proveedor:</label>
    <input type="number" id="txtIdTip" name="idTiP" class="form-control" value="<?php echo $v['idTipoProveedor']; ?>"/>
</br>

<input type="hidden" name="idProveedor" value="<?php echo $v['idProveedor']; ?>"/></br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" name="btn" value="Actualizar"> <br>
        </div>
        <input type="hidden" name="m" value="actualizar">
        <?php
        endforeach;
    endforeach;
    ?>
</form>
<?php
require_once("layouts/footer.php");
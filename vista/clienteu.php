<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Cliente</h1></figure>
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

    <label for="txtId" class="form-label">Id Tipo Cliente:</label>
    <input type="number" id="txtId" name="idTiCli" class="form-control" value="<?php echo $v['idTipoCliente']; ?>"/>
</br>

<input type="hidden" name="idCliente" value="<?php echo $v['idCliente']; ?>"/></br>
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
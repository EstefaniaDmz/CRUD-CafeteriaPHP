<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Sucursal</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>

    <label for="txtNom" class="form-label">Nombre:</label>
    <input type="text" id="txtNom" name="nom" class="form-control" value="<?php echo $v['nombre']; ?>"/>

    <label for="txtCal" class="form-label">Calle:</label>
    <input type="text" id="txtCal" name="calle" class="form-control" value="<?php echo $v['calle']; ?>"/>

    <label for="txtTel" class="form-label">Teléfono:</label>
    <input type="number" id="txtTel" name="tel" class="form-control" value="<?php echo $v['telefono']; ?>"/>

    <label for="txtIdAs" class="form-label">Id Asentamiento:</label>
    <input type="number" id="txtIdAs" name="idAse" class="form-control" value="<?php echo $v['idAsentamiento']; ?>"/>
</br>

<input type="hidden" name="idSucursal" value="<?php echo $v['idSucursal']; ?>"/></br>
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
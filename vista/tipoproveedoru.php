<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Tipo Proveedor</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>

    <label for="txNom" class="form-label">Nombre:</label>
    <input type="text" id="txtNom" name="nom" class="form-control" value="<?php echo $v['nombre']; ?>"/>

    <label for="txtDes" class="form-label">Descripción:</label>
    <input type="text" id="txtDes" name="des" class="form-control" value="<?php echo $v['descripcion']; ?>"/>

</br>

<input type="hidden" name="idTipoProveedor" value="<?php echo $v['idTipoProveedor']; ?>"/></br>
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
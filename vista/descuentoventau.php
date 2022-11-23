<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Descuento Venta</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>

    <label for="txtiddes" class="form-label">Id Descuento:</label>
    <input type="number" id="txtiddes" name="iddes" class="form-control" value="<?php echo $v['idDescuento']; ?>"/>

    <label for="txtidve" class="form-label">Id Venta:</label>
    <input type="number" id="txtidve" name="idven" class="form-control" value="<?php echo $v['idVenta']; ?>"/>

</br>

<input type="hidden" name="idDescuentoVenta" value="<?php echo $v['idDescuentoVenta']; ?>"/></br>
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
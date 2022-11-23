<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Platillo Venta</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>

    <label for="txtidpla" class="form-label">Id Platillo:</label>
    <input type="number" id="txtidpla" name="idpla" class="form-control" value="<?php echo $v['idPlatillo']; ?>"/>

    <label for="txtidven" class="form-label">Id Venta:</label>
    <input type="number" id="txtidven" name="idven" class="form-control" value="<?php echo $v['idVenta']; ?>"/>

</br>

<input type="hidden" name="idPlatilloVenta" value="<?php echo $v['idPlatilloVenta']; ?>"/></br>
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
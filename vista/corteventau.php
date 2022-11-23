<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Corte Venta</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>

    <label for="txtDat" class="form-label">Fecha:</label>
    <input type="text" id="txtDat" name="fecha" class="form-control" placeholder="aaaa/mm/dd hh:mm:ss" value="<?php echo $v['fecha'] ?>"/>

    <label for="txtcaj" class="form-label">Caja:</label>
    <input type="text" id="txtref" name="caja" class="form-control" value="<?php echo $v['caja'] ?>"/>

    <label for="txtVen" class="form-label">Venta:</label>
    <input type="number" id="txtVen" name="ven" step="any" class="form-control" value="<?php echo $v['venta'] ?>"/>

    <label for="txtGas" class="form-label">Gasto:</label>
    <input type="number" id="txtGas" name="gas" step="any" class="form-control" value="<?php echo $v['gasto'] ?>"/>

    <label for="txtTar" class="form-label">Tarjeta:</label>
    <input type="number" id="txtTar" name="tar" step="any" class="form-control" value="<?php echo $v['tarjeta'] ?>"/>

    <label for="txtidTra" class="form-label">Id Trabajador:</label>
    <input type="text" id="txtidTra" name="idTra" class="form-control" value="<?php echo $v['idTrabajador'] ?>"/>


</br>

<input type="hidden" name="idCorteVenta" value="<?php echo $v['idCorteVenta'] ?>"/></br>
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
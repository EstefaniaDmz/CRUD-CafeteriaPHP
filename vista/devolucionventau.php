<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Devolución Venta</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>

    <label for="txtArt" class="form-label">Platillo:</label>
    <input type="text" id="txtArt" name="art" class="form-control" value="<?php echo $v['platillo']; ?>"/>

    <label for="txtRaz" class="form-label">Razón:</label>
    <input type="text" id="txtRaz" name="raz" class="form-control" value="<?php echo $v['razon']; ?>"/>

    <label for="txtCant" class="form-label">Cantidad:</label>
    <input type="number" id="txtCant" name="cant" class="form-control" value="<?php echo $v['cantidad']; ?>"/>

    <label for="txtCos" class="form-label">Costo:</label>
    <input type="number" id="txtCos" name="cost" step="any" class="form-control" value="<?php echo $v['costo']; ?>"/>

    <label for="txtidc" class="form-label">Id Venta:</label>
    <input type="number" id="txtidc" name="idcom" class="form-control" value="<?php echo $v['idVenta']; ?>"/>

</br>

<input type="hidden" name="idDevolucionVenta" value="<?php echo $v['idDevolucionVenta']; ?>"/></br>
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
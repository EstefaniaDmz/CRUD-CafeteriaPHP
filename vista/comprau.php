<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Compra</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
        <label for="txtref" class="form-label">Referencia:</label>
    <input type="text" id="txtref" name="refer" class="form-control" value="<?php echo $v['referencia']; ?>"/>

    <label for="txtPre" class="form-label">Precio:</label>
    <input type="number" id="txtPre" name="precio" step="any" class="form-control" value="<?php echo $v['precio']; ?>"/>

    <label for="txtDat" class="form-label">Fecha:</label>
    <input type="text" id="txtDat" name="fecha" class="form-control" placeholder="aaaa/mm/dd hh:mm:ss" value="<?php echo $v['fecha']; ?>"/>

    <label for="txtidPr" class="form-label">Id Proveedor:</label>
    <input type="number" id="txtidPr" name="idprov" class="form-control" value="<?php echo $v['idProveedor']; ?>"/>

</br>

<input type="hidden" name="idCompra" value="<?php echo $v['idCompra']; ?>"/></br>
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
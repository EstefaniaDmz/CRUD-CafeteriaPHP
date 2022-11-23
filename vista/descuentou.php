<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Descuento</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>

    <label for="txtnom" class="form-label">Nombre:</label>
    <input type="text" id="txtnom" name="nom" class="form-control" value="<?php echo $v['nombre']; ?>"/>

    <label for="txtdes" class="form-label">Descripción:</label>
    <input type="text" id="txtdes" name="desc" class="form-control" value="<?php echo $v['descripcion']; ?>"/>

    <label for="txtPor" class="form-label">Porcentaje:</label>
    <input type="number" id="txtPor" name="porc" min="1" max="100" class="form-control" value="<?php echo $v['porcentaje']; ?>"/>

</br>

<input type="hidden" name="idDescuento" value="<?php echo $v['idDescuento']; ?>"/></br>
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
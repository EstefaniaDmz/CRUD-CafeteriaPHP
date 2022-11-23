<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Vehículo</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>

    <label for="txtNum" class="form-label">Número:</label>
    <input type="text" id="txtNum" name="num" class="form-control" value="<?php echo $v['numero']; ?>"/>

    <label for="txtDes" class="form-label">Descripción:</label>
    <input type="text" id="txtDes" name="des" class="form-control" value="<?php echo $v['descripcion']; ?>"/>

    <label for="txtIdtr" class="form-label">Id Trabajador:</label>
    <input type="text" id="txtIdtr" name="idTr" class="form-control" value="<?php echo $v['idTrabajador']; ?>"/>

</br>

<input type="hidden" name="idVehiculo" value="<?php echo $v['idVehiculo']; ?>"/></br>
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
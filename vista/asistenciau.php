<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Asistencia</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
    <label for="txtFec" class="form-label">Fecha:</label>
    <input type="date" id="txtFec" name="fecha" class="form-control" value="<?php echo $v['fecha']; ?>"/>

    <label for="txtHL" class="form-label">Hora llegada:</label>
    <input type="time" id="txtHL" name="horaL" class="form-control" value="<?php echo $v['horaLlegada']; ?>"/>

    <label for="txtHS" class="form-label">Hora salida:</label>
    <input type="time" id="txtHS" name="horaS" class="form-control" value="<?php echo $v['horaSalida']; ?>"/>

    <label for="txtTra" class="form-label">Id Trabajador:</label>
    <input type="number" id="txtTra" name="idTr" class="form-control" value="<?php echo $v['idTrabajador']; ?>"/>

</br>

<input type="hidden" name="idAsistencia" value="<?php echo $v['idAsistencia']; ?>"/></br>
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
<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Platillo Material</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>

    <label for="txtidpla" class="form-label">Id Platillo:</label>
    <input type="number" id="txtidpla" name="idpla" class="form-control" value="<?php echo $v['idPlatillo']; ?>"/>

    <label for="txtidmat" class="form-label">Id Material:</label>
    <input type="number" id="txtidmat" name="idmat" class="form-control" value="<?php echo $v['idMaterial']; ?>"/>

</br>

<input type="hidden" name="idPlatilloMaterial" value="<?php echo $v['idPlatilloMaterial']; ?>"/></br>
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
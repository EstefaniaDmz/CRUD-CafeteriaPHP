<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Almácen</h1></figure>
<form action="" method="get" class="form-control">
    <?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
        <label for="txtNum" class="form-label">Número:</label>
    <input type="text" id="txtNum" name="num" class="form-control" value="<?php echo $v['numero']; ?>"/>

    <label for="txtCap" class="form-label">Capacidad:</label>
    <input type="number" id="txtCap" name="cap" class="form-control" value="<?php echo $v['capacidad']; ?>"/>
    
    <input type="hidden" name="idAlmacen" value="<?php echo $v['idAlmacen']; ?>"/></br>
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
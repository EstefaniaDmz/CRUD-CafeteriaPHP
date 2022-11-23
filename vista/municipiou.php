<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Municipio</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>

    <label for="txtNom" class="form-label">Nombre:</label>
    <input type="text" id="txtNom" name="nom" class="form-control" value="<?php echo $v['nombre']; ?>"/>

    <label for="txtCod" class="form-label">Código:</label>
    <input type="number" id="txtCod" name="cod" class="form-control" value="<?php echo $v['codigo']; ?>"/>

    <label for="txtidE" class="form-label">Id Estado:</label>  
    <input type="number" id="txtidE" name="idEst" class="form-control" value="<?php echo $v['idEstado']; ?>"/>

</br>

<input type="hidden" name="idMunicipio" value="<?php echo $v['idMunicipio']; ?>"/></br>
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
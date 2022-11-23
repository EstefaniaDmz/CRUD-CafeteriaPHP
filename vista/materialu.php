<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Material</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>


    <label for="txtNom" class="form-label">Nombre:</label>
    <input type="text" id="txtNom" name="nom" class="form-control" value="<?php echo $v['nombre']; ?>"/>

    <label for="txtPre" class="form-label">Precio:</label>
    <input type="number" id="txtPre" name="pre" class="form-control" step="any" value="<?php echo $v['precio']; ?>"/>

    <label for="txtDes" class="form-label">Descripción:</label>
    <input type="text" id="txtDes" name="des" class="form-control" value="<?php echo $v['descripcion']; ?>"/>

    <label for="txtCant" class="form-label">Cantidad:</label>
    <input type="number" id="txtCant" name="cant" class="form-control" value="<?php echo $v['cantidad']; ?>"/>

    <label for="txtidAl" class="form-label">Id Almacén:</label>
    <input type="number" id="txtidAl" name="idAl" class="form-control" value="<?php echo $v['idAlmacen']; ?>"/>

    <label for="txtidCom" class="form-label">Id Compra:</label>
    <input type="number" id="txtidCom" name="idCom" class="form-control" value="<?php echo $v['idCompra']; ?>"/>

</br>

<input type="hidden" name="idMaterial" value="<?php echo $v['idMaterial']; ?>"/></br>
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
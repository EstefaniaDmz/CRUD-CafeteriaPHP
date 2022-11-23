<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Almácen</h1></figure>
<form action="" method="get" class="form-control">
    <?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
        <label for="txtNom" class="form-label">Nombre:</label>
    <input type="text" id="txtNom" name="nombre" class="form-control" value="<?php echo $v['nombre']; ?>"/>

    <label for="txtCp" class="form-label">Código postal:</label>
    <input type="txt" id="txtCp" name="codigopostal" maxlength="5" class="form-control" value="<?php echo $v['codigoPostal']; ?>"/>
    
    <label for="txtid" class="form-label">ID:</label>
    <input type="number" id="txtid" name="id" class="form-control" value="<?php echo $v['id']; ?>"/>

    <label for="txtTip" class="form-label">Id Tipo de Asentamiento:</label>
    <input type="number" id="txtTip" name="idtipoas" class="form-control" value="<?php echo $v['idTipoAsentamiento']; ?>"/>

    <label for="txtMuni" class="form-label">Id Municipio:</label>
    <input type="number" id="txtMuni" name="idmuni" class="form-control" value="<?php echo $v['idMunicipio']; ?>"/>

    <label for="txtZon" class="form-label">Id Zona:</label>
    <input type="number" id="txtZon" name="idzona" class="form-control" value="<?php echo $v['idZona']; ?>"/>
    
    <input type="hidden" name="idAsentamiento" value="<?php echo $v['idAsentamiento']; ?>"/></br>
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
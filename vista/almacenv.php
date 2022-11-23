<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Almácen</h1></figure>
<div class="d-grid gasp-2">
<a class="btn btn-success" href="../modelo/almacen.php?m=nuevo" class="btn">Agregar</a>
</div> </br>
<div class="row row-cols-1 row-cols-md-3 g-4" id="tablaAlmacen">
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <div class="col">
                    <div class="card">
                    <h5 class="card-header">ID: [<?php echo $v['idAlmacen'] ?>]</h5>
                    <div class="card-body">
                    <h5 class="card-title">Número: <?php echo $v['numero'] ?></h5>
                    <div class="collapse" id="Almacen<?php echo $v['idAlmacen']?>">
                    <p class="card-text"><ul><li>Capacidad: <?php echo $v['capacidad'] ?></li>
                        <li>Usuario creó: <?php echo $v['idUsuarioCrea'] ?></li>
                        <li>Fecha creó: <?php echo $v['fechaCrea'] ?></li>
                        <li>Usuario modificó: <?php echo $v['idUsuarioModifica'] ?></li>
                        <li>Fecha modificó: <?php echo $v['fechaModifica'] ?></li>
                        </ul></p>
                    </div>
                    <div class="card-footer bg-transparent">
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                    <button class="btn btn-outline-primary" data-bs-toggle="collapse" href="#Almacen<?php echo $v['idAlmacen']?>" role="button" aria-expanded="false" aria-controls="Almacen<?php echo $v['idAlmacen']?>">Detalles</button>
                    <a href="../modelo/almacen.php?m=editar&idAlmacen=<?php echo $v['idAlmacen']?>" class="btn btn-outline-warning">Editar</a>
                    <a href="../modelo/almacen.php?m=eliminar&idAlmacen=<?php echo $v['idAlmacen']?>" class="btn btn-outline-danger" onclick="return confirm('¿Está seguro de eliminar el registro?'); false">Eliminar</a>
                    </div></div></div></div></div>
                    <?php endforeach; ?>
            <?php else: ?>
                <h5>NO HAY DATOS</h5>
            <?php endif ?>
            </div>
<?php
require_once("layouts/footer.php");
<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Cliente</h1></figure>
<div class="d-grid gasp-2">

<a class="btn btn-success" href="../modelo/cliente.php?m=nuevo" class="btn">Agregar</a>
</div> </br>
<div class="row row-cols-1 row-cols-md-3 g-4" id="tablaCliente">
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <div class="col">
                    <div class="card">
                    <h5 class="card-header">ID: [<?php echo $v['idCliente'] ?>]</h5>
                    <div class="card-body">
                    <h5 class="card-title">Nombre: <?php echo $v['apellidoPaterno'] ?> <?php echo $v['apellidoMaterno'] ?> <?php echo $v['nombre'] ?></h5>
                    <div class="collapse" id="Cliente<?php echo $v['idCliente']?>">
                    <p class="card-text"><ul><li>RFC: <?php echo $v['rfc'] ?></li>
                        <li>Correo: <?php echo $v['correo'] ?></li>
                        <li>Teléfono: <?php echo $v['telefono'] ?></li>
                        <li>Tipo cliente: <?php echo $v['idTipoCliente'] ?></li>
                        <li>Usuario creó: <?php echo $v['idUsuarioCrea'] ?></li>
                        <li>Fecha creó: <?php echo $v['fechaCrea'] ?></li>
                        <li>Usuario modificó: <?php echo $v['idUsuarioModifica'] ?></li>
                        <li>Fecha modificó: <?php echo $v['fechaModifica'] ?></li>
                        </ul></p>
                    </div>
                    <div class="card-footer bg-transparent">
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                    <button class="btn btn-outline-primary" data-bs-toggle="collapse" href="#Cliente<?php echo $v['idCliente']?>" role="button" aria-expanded="false" aria-controls="Cliente<?php echo $v['idCliente']?>">Detalles</button>
                    <a href="../modelo/cliente.php?m=editar&idCliente=<?php echo $v['idCliente']?>" class="btn btn-outline-warning">Editar</a>
                    <a href="../modelo/cliente.php?m=eliminar&idCliente=<?php echo $v['idCliente']?>" class="btn btn-outline-danger" onclick="return confirm('¿Está seguro de eliminar el registro?'); false">Eliminar</a>
                    </div></div></div></div></div>
                    <?php endforeach; ?>
            <?php else: ?>
                <h5>NO HAY DATOS</h5>
            <?php endif ?>
            </div>
<?php
require_once("layouts/footer.php");
<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Devolución Compra</h1></figure>
<div class="d-grid gasp-2">

<a class="btn btn-success" href="../modelo/devolucioncompra.php?m=nuevo" class="btn">Agregar</a>
</div> </br>
<div class="row row-cols-1 row-cols-md-3 g-4" id="tablaDevolucionCompra">
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <div class="col">
                    <div class="card">
                    <h5 class="card-header">ID: [<?php echo $v['idDevolucionCompra'] ?>]</h5>
                    <div class="card-body">
                    <h5 class="card-title">Artículo: <?php echo $v['articulo'] ?></h5>
                    <div class="collapse" id="DevolucionCompra<?php echo $v['idDevolucionCompra']?>">
                    <p class="card-text"><ul><li>Razón: <?php echo $v['razon'] ?></li>
                        <li>Cantidad: <?php echo $v['cantidad'] ?></li>
                        <li>Costo: $<?php echo $v['costo'] ?></li>
                        <li>ID Compra: <?php echo $v['idCompra'] ?></li>
                        <li>Usuario creó: <?php echo $v['idUsuarioCrea'] ?></li>
                        <li>Fecha creó: <?php echo $v['fechaCrea'] ?></li>
                        <li>Usuario modificó: <?php echo $v['idUsuarioModifica'] ?></li>
                        <li>Fecha modificó: <?php echo $v['fechaModifica'] ?></li>
                        </ul></p>
                    </div>
                    <div class="card-footer bg-transparent">
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                    <button class="btn btn-outline-primary" data-bs-toggle="collapse" href="#DevolucionCompra<?php echo $v['idDevolucionCompra']?>" role="button" aria-expanded="false" aria-controls="DevolucionCompra<?php echo $v['idDevolucionCompra']?>">Detalles</button>
                    <a href="../modelo/devolucioncompra.php?m=editar&idDevolucionCompra=<?php echo $v['idDevolucionCompra']?>" class="btn btn-outline-warning">Editar</a>
                    <a href="../modelo/devolucioncompra.php?m=eliminar&idDevolucionCompra=<?php echo $v['idDevolucionCompra']?>" class="btn btn-outline-danger" onclick="return confirm('¿Está seguro de eliminar el registro?'); false">Eliminar</a>
                    </div></div></div></div></div>
                    <?php endforeach; ?>
            <?php else: ?>
                <h5>NO HAY DATOS</h5>
            <?php endif ?>
            </div>
<?php
require_once("layouts/footer.php");
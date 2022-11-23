<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Cafetería</h1></figure>

<table class="table table-striped table-bordered">
    <tr><th>Tabla</th><th>Opciones</th></tr>
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <tr><td><?php echo $v['Tables_in_cafeteria'] ?></td>
                    <td><div>
                    <a href="../modelo/<?php echo $v['Tables_in_cafeteria'] ?>.php" class="btn btn-outline-info">Ver</a>
                    <a href="../modelo/<?php echo $v['Tables_in_cafeteria'] ?>.php?m=nuevo" class="btn btn-outline-success">Agregar</a></div></td></tr>
                    <?php endforeach; ?>
            <?php else: ?>
                <h5>NO HAY DATOS</h5>
            <?php endif ?>
            </table>
<?php
require_once("layouts/footer.php");
?>
<?php
require_once("../controlador/puestoc.php");
if(isset($_GET['m'])):    
    if(method_exists("modeloController",$_GET['m'])):
        modeloController::{$_GET['m']}();
    endif;
else:
    modeloController::index();
endif;
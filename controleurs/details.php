<?php
include_once '../models/vehicle_manager.php';
function loadclass($class)
{
   require '../entities/'.$class.'.php';
}
spl_autoload_register('loadclass');
$id=htmlspecialchars($_GET['id']);
$veh=$manager_veh->select_vehicle($id);
 var_dump($veh->type());





require '../views/details_vue.php';
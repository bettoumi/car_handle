<?php
include_once '../models/vehicle_manager.php';
function loadclass($class)
{
   require '../entities/'.$class.'.php';
}
spl_autoload_register('loadclass');
$id=htmlspecialchars($_GET['id']);
$id=(int)$id;
$veh=$manager_veh->select_vehicle($id);






require '../views/details_vue.php';
<?php
function loadclass($class)
{
   require '../entite/'.$class.'.php';
}
spl_autoload_register('loadclass');


require '../views/index_vue.php';
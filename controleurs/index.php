<?php
include_once '../models/vehicle_manager.php';
function loadclass($class)
{
   require '../entities/'.$class.'.php';
}
spl_autoload_register('loadclass');


// $info_vehicle=[
//  'model'=>'xxxx',
//  'type'=>'car',
//  'year_r'=>2010,
//  'color'=>'rouge',
//   'price'=>1500,
//   'mileage'=>120000,
//   'energy'=>'essence',
//   'description'=>'qghGHGDHQSDHXGQHDGHQxhqhxqhdq'


// ];

 if(      isset($_POST['model']) AND !empty($_POST['model'] ) AND
         isset($_POST['type']) AND !empty($_POST['type'] ) AND
         isset($_POST['year_r']) AND !empty($_POST['year_r'] ) AND
         isset($_POST['color']) AND !empty($_POST['color'] ) AND
         isset($_POST['price']) AND !empty($_POST['price'] ) AND
         isset($_POST['mileage']) AND !empty($_POST['mileage'] ) AND
         isset($_POST['energy']) AND !empty($_POST['energy'] ) AND
         isset($_POST['description']) AND !empty($_POST['description'] ) 
  	  	)

{
	$nameclass=ucfirst($_POST['type']);
	var_dump($_POST);
	var_dump($nameclass);
	 $vec=new $nameclass($_POST);
    $manger_veh->add_vehicle($vec);

}



require '../views/index_vue.php';
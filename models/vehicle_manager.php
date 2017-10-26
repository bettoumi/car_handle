<?php
require 'dbconnexion/db_connexion.php';
class vehicle_manager
{

	protected $db;


	public function __construct($db)
	{
		$this->setDb($db);
	}


   // add vehicle in data base
   // -----------------------------------------------------------------------
   public function add_vehicle(Vehicle $veh)
   {   
       
  	 
      if(!$this->exist_veh($veh))
      {

      	$req=$this->db->prepare('INSERT INTO vehicles(model, type, year_r, color, price, mileage, energy, description) VALUES(:model, :type, :year_r, :color, :price, :mileage, :energy, :description)');

      	$req->bindValue('model', $veh->model(), PDO::PARAM_STR );
      	$req->bindValue('type', $veh->type(), PDO::PARAM_STR);
      	$req->bindValue('year_r', $veh->year_r(), PDO::PARAM_INT);
      	$req->bindValue('color', $veh->color(), PDO::PARAM_STR);
      	$req->bindValue('price', $veh->price());
      	$req->bindValue('mileage', $veh->mileage(), PDO::PARAM_INT);
      	$req->bindValue('energy', $veh->energy(), PDO::PARAM_STR);
      	$req->bindValue('description', $veh->description(), PDO::PARAM_STR);
      	$req->execute();
      }

  }   

// Select all  vehicle from data base
// -----------------------------------------------------------------------
   public function selec_allvehicle() 
   {
     
 
 	 $veh=[];
 	 $req=$this->db->query('SELECT model, type, color,  price, mileage, energy, description FROM vehicles') ;
 	  $allvehicls=$req->fetchAll(PDO::FETCH_ASSOC);
 	 
 	  foreach ($allvehicls as $vehc)
 	   {

 	  	  switch ($vehc['type'])

           {

		      case 'car': $veh[]= new Car($vehc);

		      case 'moto': $veh[]= new Moto($vehc);
		      case 'truck':$veh[]=new Truck($vehc);

		      default: return null;

          }
	 
         
 	  }
 	   
   return $veh;

 }


//   check for existance of vehicle in data base
// -------------------------------------------------------------------------------
public function exist_veh(Vehicle $veh)
{
	$req=$this->db->prepare('SELECT COUNT(*)  FROM  vehicles WHERE model =:model');
    $req->execute([
    	'model'=> $veh->model()]
    	);
    
    return $req->fetchColumn()>0;
   
}


  


    public function select_one($info)
    {


    } 

    public function setDb(PDO $db)
   {
   	  $this->db=$db;
   }


}
$db=connex_bdd();
$manger_veh=new vehicle_manager($db);


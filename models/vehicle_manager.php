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
        return $this->db->lastInsertId();
        // $this->add_image($src);
      }

      

  }  

  //ADD image in data base
  //----------------------------------------------------------
  public function add_image($src, $id) 

  {
     // var_dump($src);
    var_dump($id);
     $id=(int)$id;
     $req1=$this->db->prepare('INSERT INTO images_vehicles(scr, idvehicles) VALUES(:scr, :idvehicles)');
        $req1->execute(array(
             'scr'=> $src,
            'idvehicles' => $id

            ));


  }


// Select all  vehicle from data base
// -----------------------------------------------------------------------
   public function selec_allvehicle() 
   {
     
 
     	 $veh=[];
     	 $req=$this->db->query('SELECT id,  model, type, color, year_r,  price, mileage, energy, description FROM vehicles') ;
     	  $allvehicls=$req->fetchAll(PDO::FETCH_ASSOC);
     	    // var_dump($allvehicls);

     	  foreach ($allvehicls as $vehc )
     	   {
                	
    	 	   	$nameclass=ucfirst($vehc['type']);
    		     $veh[]=new $nameclass($vehc);
     	  	 
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


  //delete ehicle from data base
  //------------------------------------------------------------------------
  public  function delte_vehicle( $info)
  {
  	   // var_dump($info);
     $req= $this->db->prepare('DELETE  FROM vehicles WHERE  id=:id');
     $req->execute([
      'id'=>$info] );

     

  }
//Update des information of vehicle ind data base
//----------------------------------------------------------------------------------
  
  public function edit_vehicle(vehicle $veh)
    {
      $req=$this->db->prepare('UPDATE vehicles  SET model=:model, type=:type, color=:color , year_r=:year_r,  price=:price, mileage=:mileage, energy=:energy, description=:description WHERE id=:id');
     
        $req->bindValue('id', $veh->id(),PDO::PARAM_INT);
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

 //select a vehicle from data base
//----------------------------------------------------------------------------------
  public function select_vehicle($info) 
  {
     if( is_int($info))
     {
        $id=(int)$info;
  
         $req=$this->db->prepare('SELECT * FROM vehicles WHERE id= :id');
         $req->bindValue('id', $id, PDO::PARAM_INT);
         $req->execute();
         $resul=$req->fetch(PDO::FETCH_ASSOC);
         // var_dump($resul);
         $nameclass=ucfirst($resul['type']);
                return new $nameclass($resul);
      } 
             //select vhicles width type
     else 
      {
        
        $vehs=[];
        $req2=$this->db->prepare('SELECT * FROM vehicles WHERE type= :type') ;
        $req2->bindValue('type', $info, PDO::PARAM_STR);
       $req2->execute();
         $resul=$req2->fetchALL(PDO::FETCH_ASSOC);
        // var_dump($resul);
               
        // var_dump($resul);
        foreach ($resul as $veh ) {
            $nameclass=ucfirst($veh['type']);
             $vehs[]=new $nameclass($veh);
        }
         
          return $vehs;
        }  
 
  } 

  //  



     

    public function setDb(PDO $db)
   {
   	  $this->db=$db;
   }


}
$db=connex_bdd();
$manager_veh=new vehicle_manager($db);


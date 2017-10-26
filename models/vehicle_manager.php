<?php
require 'dbconnexion/db_connexion.php';
class vehicle_manager
{

	protected $bd;


	public function __construct($bd)
	{
		$this->setDd($db);
	}


   // add vehicle in data base
   // -----------------------------------------------------------------------
   public function add_cat(Cat $cat)
   {   
       // var_dump($cat);
  	 
      if(!$this->exist_cat($cat))
      {
      	$req=$this->db->prepare('INSERT INTO cats(name, age, sex, color) VALUES(:name, :age, :sex, :color)');

      	$req->bindValue('name', $cat->name(), PDO::PARAM_STR );
      	$req->bindValue('age', $cat->age(), PDO::PARAM_INT);
      	$req->bindValue('sex', $cat->sex(), PDO::PARAM_STR);
      	$req->bindValue('color', $cat->color(), PDO::PARAM_STR);
      	$req->execute();
      }

  }   


   public function selec_allvehicle() 
   {


   }


    public function select_one($info)
    {


    } 

    public function setDb(PDO $db)
   {
   	$this->db=$db;
   }


}
$db=dbconnect();


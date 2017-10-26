<?php
 abstract class Vehicle
{
 protected $id,
           $model,
           $type,
           $year_r,
           $color,
           $price,
           $energy,
           $mileage,
           $description;
  public function __construct(array $info_vehicle)
  {

  	 $this->hydrater($info_vehicle);
     $this->type=strtoupper(static::class);
  }

  //Getters
  //------------------------------------------------------------------------
  public function model(){ return $this->model;}
  public function type(){ return $this->type;}
  public function color(){ return $this->color;}
  public function price(){ return $this->price;}
  public function energy(){ return $this->energy;}
  public function mileage(){ return $this->mileage;}
  public function description(){ return $this->description;}

  //Setters
  //-------------------------------------------------------------------------
  
  public function setId($id) 
  {
    $id=(int)$id;
    if($id>0) 
    {
    	$this->id=$id;
    }  
    else {
          trigger_error('id invalide ', E_USER_WARNING);
          return;
     }
  }
               //-----------------------
  public function setModel($model)
  {
  	if(is_string($model))
  	{
  		$this->model=$model;
  	}
  	else {trigger_error('nom invalide', E_USER_WARNING);
     	  return;
        }
  }
            //-----------------------
  public function setColor($color)
  {
		if(is_string($color))
		  	{
		  		$this->color=$color;

		  	}

		 else
		 	 {trigger_error('couleur invalide', E_USER_WARNING);
     	 		return;
     		}
  }
            //-----------------------
  public function setPrice($price)
  {
		if(is_float($price))
		  	{
		  		$this->price=$price;
		  	}
		 else {trigger_error('prix invalide', E_USER_WARNING);
     	 return;
     	}  	
  }
             //-----------------------
public function setEnergy($energy)
  {
		if(is_string($energy))
		  	{
		  		$this->energy=$energy;
		  	}
		 else {trigger_error('energy invalide', E_USER_WARNING);
     	 return; }	

  }
             //----------------------- 
  public function setMileage($Mileage)
  {
		if(is_int($Mileage)AND ($Mileage>0))
		  	{
		  		$this->mileage=$Mileage;
		  	}
		 else
		 {
           trigger_error('nombre de kilomtrage invalide', E_USER_WARNING);
     	   return;
		 } 	
  }
  public function setDescription($description)
  {
		
		  		$this->description=$description;
		  
		
  }




//hydater------------------------------------------------------------
//--------------------------------------------------------------------
public function hydrater(array $info_vehicle)
{
	foreach ($info_vehicle as $vehicle=> $value)
	 {
		$setters='set'.ucfirst($vehicle);
		if(method_exists($this, $setters))
		{
			$this->$setters($value);
		}

	}
}





}
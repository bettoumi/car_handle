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
      $this->type=lcfirst(static::class);
  }

  //Getters
  //------------------------------------------------------------------------
  public function id(){ return $this->id;}
  public function model(){ return $this->model;}
  public function type(){ return $this->type;}
  public function color(){ return $this->color;}
  public function price(){ return $this->price;}
  public function energy(){ return $this->energy;}
  public function mileage(){ return $this->mileage;}
  public function description(){ return $this->description;}
  public function year_r(){ return $this->year_r;}

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
      //$price=floatval($price) ;
		
		  		$this->price=$price;
		 //  	}
		 // else {trigger_error('prix invalide', E_USER_WARNING);
   //   	 return;
   //   	}  	
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
    $Mileage=(int)$Mileage;
		if($Mileage>0)
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
  public function setYear_r($year_r)
  {
     $year_r=(int)$year_r;
  	if($year_r>0)
  	{
  		$this->year_r=$year_r;
  	}
    else
     {
           trigger_error('annee de sortie invalide', E_USER_WARNING);
         return;
     }  
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
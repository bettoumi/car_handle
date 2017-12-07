<?php
include_once '../models/vehicle_manager.php';
function loadclass($class)
{
   require '../entities/'.$class.'.php';
}
spl_autoload_register('loadclass');

// ADD information from form in data base 
// -----------------------------------------------------------------------------

 if( isset($_POST['addveh']) AND  isset($_POST['model']) AND !empty($_POST['model'] ) AND
         isset($_POST['type']) AND !empty($_POST['type'] ) AND
         isset($_POST['year_r']) AND !empty($_POST['year_r'] ) AND
         isset($_POST['color']) AND !empty($_POST['color'] ) AND
         isset($_POST['price']) AND !empty($_POST['price'] ) AND
         isset($_POST['mileage']) AND !empty($_POST['mileage'] ) AND
         isset($_POST['energy']) AND !empty($_POST['energy'] ) AND
         isset($_POST['description']) AND !empty($_POST['description'])
         	 
  	  	)

{

     $infovehicle=['type'=>htmlspecialchars($_POST['type']),
     'model'=>htmlspecialchars($_POST['model']),
     'year_r'=>(int)htmlspecialchars($_POST['year_r']),
     'color'=>htmlspecialchars($_POST['color']),
     'price'=>htmlspecialchars($_POST['price']),
     'mileage'=>htmlspecialchars($_POST['mileage']),
     'energy'=>htmlspecialchars($_POST['energy']),
     'description'=>htmlspecialchars($_POST['description']),
     ];
     
	$nameclass=ucfirst($_POST['type']);

	$vec=new $nameclass($infovehicle);

    var_dump($vec);

     
			    
			    
			     




  //receive information of image
       //-----------------------------------------
    $target_dir='../img/';
    $dest = $target_dir . basename($_FILES['image']['name']);
     $name_file=$_FILES['image']['name'];
    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png', 'jpg' );
     $extensionimage=substr($_FILES['image']['name'], strripos($_FILES['image']['name'], '.')+1);
     // var_dump($extensionimage);
     // var_dump($dest);
     // var_dump($_POST);
    if ($_FILES['image']['error'] > 0) {
    	$erreur = "Erreur lors du transfert";
    } else  if($_FILES['image']['size']>$_POST['MAX_IMAGE_SIZE'])
         {
         	echo  "Le fichier est trop gros";
         }
         else if(!in_array($extensionimage, $extensions_valides))
         	{ 
             echo  "extension non valid";
         	}
         else{
         	  
         	  $resultat = move_uploaded_file($_FILES['image']['tmp_name'], $dest);
         	   if($resultat) echo "tranfert reussi";
         	      else  echo 'le transfer ne pas fait';
         }


      	//ADD INFORMATION IMAGE IN THE TABLE      
 		//-------------------------------------------------- 
   
			     $src = $target_dir.$name_file;
			     // var_dump($src);
        

// ADD Image dans la data base
// ---------------------------------------------------------------------------------
    $idv=  $manager_veh->add_vehicle($vec);
    $manager_veh->add_image($src, $idv);  
    

 }   

// delette vehicle from data base 
// -----------------------------------------------------------------------------


   if( isset($_POST['ide'] ) and isset($_POST['delete']))
	 { 
	 	
      $id=(int)$_POST['ide'] ;
      
       $manager_veh->delte_vehicle($id) ; 
         header('Location:');

   } 



//Edite vehicle in data  base
//-----------------------------------------------------------------------------
   if(isset($_POST['id'] ) and isset($_POST['edit']))
   {
      if(isset($_POST['model'])  OR isset($_POST['type']) OR
         isset($_POST['year_r']) OR isset($_POST['color']) OR
         isset($_POST['price']) OR isset($_POST['mileage']) OR 
         isset($_POST['energy']) OR isset($_POST['description']) 
  	  	)
      {
     
	        $nameclass=ucfirst($_POST['type']);
		    $vec=new $nameclass($_POST);
	        $manager_veh->edit_vehicle($vec); 
	         
    
      }
      header('Location: '. $_SERVER[HTTP_REFERER]);

      
   }
  





//recive all informations for allvehicle from data base
//------------------------------------------------------------------------------
if(isset($_POST['select-vehicle']) )

{  //var_dump($_POST);
    if(in_array($_POST['select-vehicle'],['truck','car', 'moto' ] ))
    {
	 $vehicleinfo=$manager_veh->select_vehicle($_POST['select-vehicle']);}
     
	else
	{
		 $vehicleinfo=$manager_veh->selec_allvehicle() ;
	}

   // header('Location: '. $_SERVER[HTTP_REFERER]);
} else{
	 $vehicleinfo=$manager_veh->selec_allvehicle() ;

   
  }

// $vehicleinfo=$manager_veh->selec_allvehicle();
//recive informations for allvehicle  witdh same data type from data base
//------------------------------------------------------------------------------
 

require '../views/index_vue.php';
?>
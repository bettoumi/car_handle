<?php include_once 'template/header.php';
?>



   <?php
	  include_once 'template/aside.php';
	?>
<!-- stard display all vehicle section  -->
<section class="vehicules container mx-auto ">

 <div class="row justify-content-around ">
    <?php 
      foreach ($vehicleinfo as $veh) 

       {
       	
    	
    ?>
		<div class="card col-lg-3  col-12 col-md-6" >
		  <img class="card-img-top" src="..." alt="Card image cap">
		  <div class="card-block row">
		    <span class="col-6"><?php echo $veh->model() ; ?> </span>
		    <span class="col-6 orange"><?php echo $veh->price() ; ?></span>
		  </div>
		  <div class="card-block row">
		    <span class="col-6"><?php echo $veh->mileage(); ?></span>
		    <span class="col-6"><?php echo $veh->year_r(); ?></span>
		  </div>
		  <div class="card-block row">
		   <span class="col-6"><?php echo $veh->energy(); ?></span>
		    <span class="col-6"><?php echo $veh->color() ;?></span>
		  </div>
		        <!-- modals  -->
		  <div class="card-block ">

		             
			
                                 		<!-- Modal dlette vehicle -->
                                 <!-- //////////////////////////////// -->
				            <?php  require 'template/modaldeletevehicle.php';

 
                   
                       // Modal Edit vehicle -->
                       // ///////////////////// -->
               
                             
                    require 'template/modaleditvehicle.php';
                 ?>
			
                                 
				
           <a href="details.php?id=<?php  echo $veh->id(); ?>" class="blien btn but orange" >detail</a>



















		    <!-- <form action="" method="post" class="form-inline">
		     <input type="hidden" value="<?php //echo $veh->id(); ?>" name="id">
		     <input type="submit" class="but orange btn" name="delete" value="supprimer">
		    
		     <input type="submit"  class="but orange btn " name="edit" value="Editer">
		     <input type="submit"  class="but  orange btn " name="detail" value="detail">
		    </form> -->
		  </div>

		</div>
       <?php
  		}
  		?> 

</div>
</section>

<?php include_once 'template/footer.php';
?>





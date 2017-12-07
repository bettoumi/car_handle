<?php include_once 'template/header.php';
	  include_once 'template/aside.php';
?>
<section class="selct_affich mb-5 mx-auto w-50" >
 <form action="" method="post">
	 <div class="input-group row ">
	 	<!-- <span class="input-group-btn col-3">
	 		<button type="submit " name=choice_vehicle class="btn orange">choisir</button>
	 	</span> -->
	 	 <select name="select-vehicle" class="col-9" onchange="this.form.submit()">
	 	 		<?php if (isset($_POST['select-vehicle'])){ ?>
				  <option selected disabled><?php echo $_POST['select-vehicle'] ?> </option>
	 	 		<?php } 
	 	 	else{
	 	 		?>
				  <option selected disabled>Choisisez </option>
	 	 		<?php
	 	 		} ?>
			  <option value="all"> les vehicules</option>
			  <option value="car">voiture</option>
			  <option value="truck">camion</option>
			  <option value="moto">moto</option>
			 
		</select>
	 	 
	 </div>
 </form>
</section>

<!-- stard display all vehicle section  -->
<section class="vehicules container mx-auto ">

 <div class="row justify-content-around ">
    <?php 
      foreach ($vehicleinfo as $veh) 

       {
       	
    	
    ?>
		<div class="card col-lg-4 mb-3 col-12 col-md-6 "  style="max-width: 20em">
		  <img class="card-img-top img-fluid" src="<?php echo $veh->scr() ; ?>" alt="Card image cap">
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
    
		  </div>

		</div>
       <?php
  		}
  		?> 

</div>
</section>

<?php include_once 'template/footer.php';
?>





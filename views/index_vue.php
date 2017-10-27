<?php include_once 'template/header.php';
?>



   <?php
	  include_once 'template/aside.php';
	?>
<!-- stard display all vehicle section  -->
<section class="vehicules container">

 <div class="row">
    <?php 
      foreach ($vehicleinfo as $veh) 

       {
       	
    	  
    ?>
		<div class="card col-lg-3 col-12 col-md-6" style="width: 20rem;">
		  <img class="card-img-top" src="..." alt="Card image cap">
		  <div class="card-block row">
		    <span class="col-6"><?php echo $veh->model() ; ?></span>
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
		  <div class="card-block ">
		    <form action="" method="post" class="form-inline">
		     <input type="hidden" value="<?php echo $veh->model(); ?>" name="model">
		     <input type="submit" class="but orange btn" name="delete" value="supprimer">
		    
		     <input type="submit"  class="but orange btn " name="edit" value="Editer">
		     <input type="submit"  class="but  orange btn " name="detail" value="detail">
		    </form>
		  </div>

		</div>
       <?php
  		}
  		?> 

</div>
</section>

<?php include_once 'template/footer.php';
?>





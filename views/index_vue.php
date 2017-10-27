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

		             <!-- Button od delette vehicle from data base -->
            <button type="button" class="btn but orange " data-toggle="modal" data-target="#delete<?php echo $veh->id(); ?>" data-whatever="@mdo"> supprimer  </button>
			
                                 <!-- Modal dlette vehicle -->
				<div class="modal fade" id="delete<?php echo $veh->id(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				         <p class="modal-content"> Voulez vous supprimer la véhicule <?php echo $veh->id(); ?></p>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="" method="post">
				          <div class="form-group">
				            
                            <input type="hidden" value="<?php echo $veh->id(); ?>" name="ide">
		    				</div>
				          
				          <input type="submit" name="delete" class="btn but orange" value="supp">
				        </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        </div>
				    </div>
				  </div>
				</div>


                   <!-- Button edit vehicle  data base -->
          

            <button type="button" class="btn but orange " data-toggle="modal" data-target="#edit<?php echo $veh->id(); ?>" data-whatever="@mdo">editer  </button>
			
                                 <!-- Modal Edit vehicle -->
                                 <!-- ///////////////////// -->
				<div class="modal fade" id="edit<?php echo $veh->id(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				         <p class="modal-content">volez changer les caractéristiques de la véhicule </p>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body m-auto">
				        <form action="" method="post">

				          <div class="form-group">
				            
                            <input type="hidden" value="<?php echo $veh->id(); ?>" name="id" >
		    				</div>
		    				<div class="form-group">
				            
                            <input type="model" value="<?php echo $veh->model() ; ?>" name="model" placeholder="model:<?php echo $veh->model() ; ?>">
		    				</div>
		    			<div class="form-group">
				            
                            <input type="text" value="<?php echo $veh->type(); ?>" name="type" placeholder="type:<?php echo $veh->type() ; ?>">
		    				</div>
		    			<div class="form-group">
				            
                            <input type="text" value="<?php echo $veh->color() ; ?>" name="color" placeholder="color:<?php echo $veh->color() ; ?>">
		    				</div>
		    				<div class="form-group">
				            
                            <input type="text" value="<?php echo $veh->energy() ; ?>" name="energy" placeholder="energy:<?php echo $veh->energy() ; ?>">
		    				</div>
		    				<div class="form-group">
				            
                            <input type="number" value="<?php echo $veh->price() ; ?>" name="price" placeholder="prix:<?php echo $veh->price() ; ?>">
		    				</div>

		    				<div class="form-group">
				            
                            <input type="number" value="<?php echo $veh->mileage() ; ?>" name="mileage" placeholder="kilométrage:<?php echo $veh->mileage() ; ?>">
		    				</div>

		    				<div class="form-group">
				             <input type="number" value="<?php echo $veh->year_r() ; ?>" name="year_r" placeholder="anneé':<?php echo $veh->year_r() ; ?>">
		    				</div>
		    				<div class="form-group">
				            
                             <textarea  id="description" value="<?php echo $veh->description() ; ?>" name="description" rows="2" placeholder="description:<?php echo $veh->description() ; ?>"></textarea>
		    				</div>
				          
				          <input type="submit" name="edit" class="btn but orange" value="editer">
				        </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        </div>
				    </div>
				  </div>
				</div>
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







          <!-- Button edit vehicle  data base -->
          

            <button type="button" class="btn but orange " data-toggle="modal" data-target="#edit<?php echo $veh->id(); ?>" data-whatever="@mdo">editer  </button>


            
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
				        <form action="index.php" method="post">

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
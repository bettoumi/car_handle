  <!-- Button  delette vehicle from data base -->
            <button type="button" class="btn but orange " data-toggle="modal" data-target="#delete<?php echo $veh->id(); ?>" data-whatever="@mdo"> supprimer    </button>


             		<!-- Modal dlette vehicle -->
             <!-- /////////////////////////////////// -->

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
				        <form action="index.php" method="post">
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

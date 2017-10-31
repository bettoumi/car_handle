<aside id="formulaire ">
	

	    			<!-- Add car -->
	    <!-- /////////////// //////////////////////////////////////////-->
	<div class="collapse" id="voiture" >
	  <div class="card card-block orange" id="vehicle" >
	       <form action="" method="post"   >
	       	<div class="row">
			<div class="form-group row col-12 col-md-6 col-lg-4" >
			  <label for="model" class="col-3 col-form-label">model:</label>
			  <div class="col-9">

			    <input class="form-control" type="text" value="" name="model" id="model">
			  </div>
			</div>
			
			<div class="form-group row col-12 col-md-6 col-lg-4">
			  <label for="type" class="col-3 col-form-label">typev: </label>
			  <div class="col-9">
			       <select name="type">
					    <option value="car">Car</option>
					    <option value="truck">Truck</option>
					    <option value="moto">Moto</option>
				  </select>
			    <!-- <input class="form-control"  name="type" type="text" value="" id="type"> -->
			  </div>
			</div>
                     

			<div class="form-group row col-12 col-md-6 col-lg-4">
			  <label for="year_r" class="col-3 col-form-label">Annee:</label>
			  <div class="col-9">
			    <input class="form-control"  name="year_r" type="number" value="" id="year_r">
			  </div>
			</div>
	    </div>	
	     <div class="row">	
			<div class="form-group row col-12 col-md-6 col-lg-4">
			  <label for="price" class="col-3 col-form-label">Prix:</label>
			  <div class="col-9">
			    <input class="form-control"  name="price" type="number" value="" id="price">
			  </div>
			</div>
			<div class="form-group row col-12 col-md-6 col-lg-4">
			  <label for="mileage" class="col-3 col-form-label">Kilométrage:</label>
			  <div class="col-9">
			    <input class="form-control"  name="mileage" type="number" value="" id="mileage" >
			  </div>
			</div>
			<div class="form-group row col-12 col-md-6 col-lg-4">
			  <label for="energy" class="col-3 col-form-label">Energy</label>
			  <div class="col-9">
			    <input class="form-control"  name="energy" type="text" value="" id="energy" placeholder="Diesel ou essence ou gpl">
			  </div>
			</div>
			</div>
			<div class="row"> 
			    <div class="form-group row col-12 col-md-4 col-lg-4">
					  <label for="color" class="col-3 col-form-label">color</label>
					  <div class="col-9">
					    <input class="form-control"  name="color" type="text" value="" id="color">
					  </div>
				</div> 
				<div class="form-group row col-12 col-md-8 col-lg-8">
					  <label for="description" class="col-3 col-form-label">description</label>
						  <div class="col-9">
							 <textarea class="form-control" id="description" name="description" rows="3"></textarea>
						 </div>
				</div>
             </div>
		            <input type="submit" name="addveh" value="Ajouter">
         
			
	       </form>
					
	  </div>
     </div>



	  
</aside>

<?php include_once 'template/header.php';
?>



   <?php
	  include_once 'template/aside.php';
	?>
<!-- stard display all vehicle section  -->
<section class="vehicules container">

 <div class="row">
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="..." alt="Card image cap">
		  <div class="card-block">
		    <h4 class="card-title">name</h4>
		    <span>price</span>
		  </div>
		  <div class="card-block">
		    <span class="">Mileage</span>
		    <span>year_r</span>
		  </div>
		  <div class="card-block">
		   <span></span>
		    <span></span>
		  </div>
		  <div class="card-block">
		    <form action="" method="post">
		     <input type="hidden" value="" name="model">
		     <input type="submit" name="delete" value="supprimer">
		     <input type="submit" name="edit" value="Mettre à jour">
		     <input type="submit" name="detail" value="detail">
		    </form>
		  </div>

		</div>
</div>
</section>

<?php include_once 'template/footer.php';
?>





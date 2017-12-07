<?php include_once 'template/header.php';
     //fom for add vehicle 
     //-------------------------
  include_once 'template/aside.php';
	?>

	<!-- Display detail of vehicle -->
<div class="container">

<div class="card mb-3">
  <img class="card-img-top img-fluid" src="<?php echo $veh->scr(); ?>" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title"><?php echo $veh->model(); ?></h4>
    <p clas="car-text"><?php echo $veh->year_r(); ?></p>
    <p clas="car-text"><?php echo $veh->energy(); ?></p>
    <p clas="car-text"><?php echo $veh->price(); ?></p>
    <p clas="car-text"><?php echo $veh->mileage(); ?></p>
    <p clas="car-text"><?php echo $veh->type(); ?></p>
    <p class="card-text"><?php echo $veh->description(); ?></p>
    
  
            		<!-- Modal dlette vehicle-->
                    <!-- //////////////////////////////// -->
				            <?php  include_once 'template/modaldeletevehicle.php';?>


    				 <!-- Modal Edit vehicle -->
                       <!-- ///////////////////// -->
                 <?php include_once 'template/modaleditvehicle.php';  ?>
			


     

  </div>
</div>

</div>


<?php include_once 'template/footer.php';
?>


<?php include_once 'template/header.php';
?>



   <?php
	  include_once 'template/aside.php';
	?>
<div class="container">

<div class="card mb-3">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title"><?php echo $veh->model(); ?></h4>
    <p clas="car-text"><?php echo $veh->year_r(); ?></p>
    <p clas="car-text"><?php echo $veh->energy(); ?></p>
    <p clas="car-text"><?php echo $veh->price(); ?></p>
    <p clas="car-text"><?php echo $veh->mileage(); ?></p>
    <p clas="car-text"><?php echo $veh->type(); ?></p>
    <p class="card-text"><?php echo $veh->description(); ?></p>
    
    <!-- Button od delette vehicle from data base -->
            <button type="button" class="btn but orange " data-toggle="modal" data-target="#delete<?php echo $veh->id(); ?>" data-whatever="@mdo"> supprimer  </button>


      <!-- Button edit vehicle  data base -->
                      <button type="button" class="btn but orange " data-toggle="modal" data-target="#edit<?php echo $veh->id(); ?>" data-whatever="@mdo">editer  </button>
                      
  </div>
</div>

</div>


<?php include_once 'template/footer.php';
?>


<?php include_once 'template/header.php';
?>

<div class="pricipal row">

   <?php
	  include_once 'template/aside.php';
	?>
<!-- stard display all vehicle section  -->
<section class="vehicules col-9 col-md-9 col-lg-8">


<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">name</h4>
    <span>price</span>
  </div>
  <div class="card-block">
    <span class="">Mileage</h4>
    <span>year_r</span>
  </div>
  <div class="card-block">
   <span></span>
    <span></span>
  </div>
  <div class="card-block">
    <form action="" method="post">
     <input type="hidden" value="" name="">
     <input type="submit" name="delete" value="supprimer">
     <input type="submit" name="edit" value="Mettre à jour">
     <input type="submit" name="detail" value="detail">
    </form>
  </div>

</div>
</section>
</div>
<?php include_once 'template/footer.php';
?>





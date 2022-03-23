<div id="carouselExampleIndicators<?php echo $job['id']?>" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <?php
    $images = slider($job['job_image']);
    for ($i = 0; $i < count($images); $i++) {
      if ($i == 0) {
        echo '<button type="button" data-bs-target="#carouselExampleIndicators'.$job['id'].'" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
      } else if ( $i < count($images))  {
        echo '<button type="button" data-bs-target="#carouselExampleIndicators'.$job['id'].'" data-bs-slide-to="' . $i . '" aria-label="Slide ' . ($i + 1) . '"></button>';
      }
    }
    ?>

  </div>
  <div class="carousel-inner">
    <?php
    for ($i = 0; $i < count($images); $i++) {
      if ($i == 0) {
        echo '<div class="carousel-item active "><img src="img\\job\\'.$images[$i].'" class="d-block w-100 " alt="'.$images[$i].'"></div>';
      } else if ( $i < count($images)) {
        echo '<div class="carousel-item "><img src="img\\job\\'.$images[$i].'" class="d-block  w-100" alt='.$images[$i].'></div>';
      }
      
    }
    ?>
    </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators<?php echo $job['id']?>" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators<?php echo $job['id']?>" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>
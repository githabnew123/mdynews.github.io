<section id="body-news">
    <h2>
      <a class="heading-text" href="#">Latest For You</a>
    </h2>
    <?php

      $local = get_local_news();
      $global = get_global_news();
      $magazine = get_magzines();
      $poem = get_poems();
      $data = $local;
      $x = sizeof($data);

     ?>
    <div class="row">
      <?php for($i=0;$i<4;$i++): ?>
        <?php 
          if ($i==1) {
            $data = $global;
          }elseif($i==2){
            $data = $magazine;
          }elseif($i==3){
            $data = $poem;
          }
        ?>
          <?php
            $x = sizeof($data);
            for($z=0;$z<2;$z++):
          ?>
        <?php
          if($x==0){
            break;
          }
          $image = get_image_with_id($data[$z]['media_id']);
          $image1 = explode(',',$image[0]['name']);
        ?>
        <div class="column col-lg-3">
          <img src="image/<?php echo $data[$z]['title']; ?>/<?php echo $image1[0]; ?>" class="body-image">
          <h3><?php echo $data[$z]['title'] ?></h3>
          <h4 class="body-text" style="font-size: 1.2rem;">
            <?php echo $data[$z]['author_name'] ?>
          </h4>
          <a href="post_info.php?post_target=<?php echo $data[$i]['id']; ?>&post_type=<?php echo $data[$i]['general_type'] ?>" class="btn btn-info"><span class="w-25">See More</span></a>
      </div>
    <?php $x--; endfor ?>
      <?php endfor ?>
    </div>
  </section>

   <hr style="border-top: solid #6C4A4A">
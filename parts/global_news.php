<?php
  $data = get_global_news();
  $x = sizeof($data);
?>
<section id="global-news" class="pad-ing">
    <h2>
      <a class="heading-text" href="#">Global News</a>
    </h2>
    <div class="row">
      <?php for($i=0;$i<4;$i++): ?>
        <?php 
          if($x==0){
            break;
          }
          $image = get_image_with_id($data[$i]['media_id']);
          $image1 = explode(',',$image[0]['name']);
        ?>
        <div class="column col-lg-3">
          <img src="image/<?php echo $data[$i]['title']; ?>/<?php echo $image1[0]; ?>" class="body-image">
          <h3><?php echo $data[$i]['title'] ?></h3>
          <h4 class="body-text" style="font-size: 1.2rem;">
            <?php echo $data[$i]['author_name'] ?>
          </h4>
          <a href="post_info.php?post_target=<?php echo $data[$i]['id']; ?>&post_type=<?php echo $data[$i]['general_type'] ?>" class="btn btn-info"><span class="w-25">See More</span></a>
      </div>
      <?php $x--; ?>
      <?php endfor ?>
    </div>
  </section>

    <hr style="border-top: solid #6C4A4A">

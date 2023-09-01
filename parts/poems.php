<?php
  $data = get_poems();
  $x = sizeof($data);
?>
<section id="poem" class="pad-ing">
    <h2>
      <a class="heading-text" href="#">Poems</a>
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
          <a href="post_info.php?post_target=<?php echo $data[$i]['id']; ?>&post_type=Poem" class="btn btn-info"><span class="w-25">See More</span></a>
      </div>
      <?php $x--; ?>
      <?php endfor ?>
    </div>
  </section>

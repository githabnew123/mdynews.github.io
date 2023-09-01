<section id="heading-news" style="margin-top: 150px;">
  <?php
    $data = get_heading_news();
    $image = get_image_with_id($data[0]['media_id']);
    $image1 = explode(',',$image[0]['name']);
   ?>
    <div class="row">
      <div class="col-lg-6">
        <img src="image/<?php echo $data[0]['title']; ?>/<?php echo $image1[0]; ?>" class="heading-image">
      </div>
      <div class="col-lg-6">
        <h1 class="text">
          <a class="heading-text font-weight-bold" href="post_info.php?post_target=<?php echo $data[0]['id']; ?>&post_type=<?php echo $data[0]['general_type'] ?>"><?php echo $data[0]['title'] ?></a>
        </h1>
        <h2>
          <?php echo $data[0]['subtitle'] ?>
        </h2>
        <h3>
          <?php echo $data[0]['author_name']; echo "<br>"; ?>
          <?php echo $data[0]['created_at'] ?>
        </h3>
      </div>
    </div>
  </section>

  <hr style="border-top: solid #6C4A4A">
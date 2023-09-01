<?php include 'parts/head.php' ?>
<body>
    <?php include 'parts/nav.php' ?>
    <h1 class="news-heading"  style="margin-top: 120px;">Global</h1>
<?php
  $data = get_global_news();
  $limit = 4;
  $x = sizeof($data);
  $b = sizeof($data);
  $y = 1;
    while($b > 4){
        $b = $b - 4;
        $y = $y + 1;
    }
    if (isset($_GET['limit'])) {
        $page_target = $_GET['limit'];
        $limit = post_target($page_target,'Global');
        $b = ($_GET['limit']*4);
    }else{
        $_GET['limit']=0;
    }
?>

  <p class="page-switch-paragraph">
      <a href="global_news.php?limit=<?php echo ($_GET['limit']-1); ?>"><button class="btn btn-outline-dark font-size" type="button" name="button"> < </button></a>
      <span class="page-number">page <?php echo $_GET['limit']+1; ?> of <?php echo $y; ?></span>
      <a href="global_news.php?limit=<?php echo ($_GET['limit']+1); ?>"><button class="btn btn-outline-dark font-size" type="button" name="button"> > </button></a>
     </p>
  <section id="news">
    <?php if ($limit>4 || $limit ==4 || $b==0): ?>
     <?php for($i=0;$i<4;$i++): ?>
        <?php 
            if ($x==0) {
                break;
            }
          ?>
        <?php
            $image = get_image_with_id($data[$i]['media_id']);
            $image1 = explode(',',$image[0]['name']);
         ?>
        <div class="row">
       <div class="col-lg-12">
         <p class="date"><?php echo $data[$i]['created_at'] ?> </p>
         <a href="#"><h4 class="heading-text"><?php echo $data[$i]['title'] ?></h4></a>
       </div>
       <div class="col-lg-6">
         <img src="image/<?php echo $data[$i]['title']; ?>/<?php echo $image1[0]; ?>" class="body-image">
       </div>
       <div class="col-lg-6 sub-text">
         <p>
             <?php
                $string = $data[$i]['content'];
                $newString = substr($string, 0, strpos($string, "."));
                echo $newString.".";
                $x--;
            ?>
         </p>
       <a href="post_info.php?post_target=<?php echo $data[$i]['id']; ?>&post_type=<?php echo $data[$i]['general_type'] ?>" class="btn btn-info"><span class="w-25">See More</span></a>
       </div>
     </div>
     
     <hr style="border-top: solid #6C4A4A">
    <?php endfor; ?>
    <p class="page-switch-paragraph">
      <a href="global_news.php?limit=<?php echo ($_GET['limit']-1); ?>"><button class="btn btn-outline-dark font-size" type="button" name="button"> < </button></a>
      <span class="page-number">page <?php echo $_GET['limit']+1; ?> of <?php echo $y; ?></span>
      <a href="global_news.php?limit=<?php echo ($_GET['limit']+1); ?>"><button class="btn btn-outline-dark font-size" type="button" name="button"> > </button></a>
     </p>
<?php endif ?>
<?php if($limit<4 && $limit>0 && $b>0 && $b<sizeof($data)): ?>
    <?php for($i=0;$i<$limit;$i++): ?>
        <?php 
            if ($x==0) {
                break;
            }
          ?>
        <?php
            $image = get_image_with_id($data[$b]['media_id']);
            $image1 = explode(',',$image[0]['name']);
         ?>
         
        <div class="row">
       <div class="col-lg-12">
         <p class="date"><?php echo $data[$b]['created_at'] ?> </p>
         <a href="#"><h4 class="heading-text"><?php echo $data[$b]['title'] ?></h4></a>
       </div>
       <div class="col-lg-6">
         <img src="image/<?php echo $data[$b]['title']; ?>/<?php echo $image1[0]; ?>" class="body-image">
       </div>
       <div class="col-lg-6 sub-text">
         <p>
             <?php
                $string = $data[$b]['content'];
                $newString = substr($string, 0, strpos($string, "."));
                echo $newString.".";
                $b++;
                $x--;
            ?>
         </p>
       <a href="post_info.php?post_target=<?php echo $data[$b-1]['id']; ?>&post_type=<?php echo $data[$b-1]['general_type'] ?>" class="btn btn-info"><span class="w-25">See More</span></a>
       </div>
     </div>
     
     <hr style="border-top: solid #6C4A4A">
    <?php endfor; ?>
    <p class="page-switch-paragraph">
      <a href="global_news.php?limit=<?php echo ($_GET['limit']-1); ?>"><button class="btn btn-outline-dark font-size" type="button" name="button"> < </button></a>
      <span class="page-number">page <?php echo $_GET['limit']+1; ?> of <?php echo $y; ?></span>
      <a href="global_news.php?limit=<?php echo ($_GET['limit']+1); ?>"><button class="btn btn-outline-dark font-size" type="button" name="button"> > </button></a>
     </p>
    <?php endif ?>
    <p class="to-top"><a href="#news">To Top</a></p>
 </section>

    <?php include 'parts/footer.php' ?>
</body>
</html>
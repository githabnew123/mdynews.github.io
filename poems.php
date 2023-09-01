<?php include 'parts/head.php' ?>
<body>
    <?php include 'parts/nav.php' ?>
<?php
  $data = get_poems();
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
        $limit = post_target($page_target,'Poems');
        $b = ($_GET['limit']*4);
    }else{
        $_GET['limit']=0;
    }
?>
    <h1 style="margin-top: 120px;">Poems</h1>
    <p class="page-switch-paragraph">
      <a href="poems.php?limit=<?php echo ($_GET['limit']-1); ?>"><button class="btn btn-outline-dark font-size" type="button" name="button"> < </button></a>
      <span class="page-number">page <?php echo $_GET['limit']+1; ?> of <?php echo $y; ?></span>
      <a href="poems.php?limit=<?php echo ($_GET['limit']+1); ?>"><button class="btn btn-outline-dark font-size" type="button" name="button"> > </button></a>
     </p>
    <section id="poems">
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
            $x--;
         ?>
    <div class="poem-body">
      <p class="date"><?php echo $data[$i]['created_at']; ?> </p>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <img src="image/<?php echo $data[$i]['title']; ?>/<?php echo $image1[0]; ?>" class="img-fluid">
        </div>
        <div class=" col-lg-6 col-md-6">
          <div class="outer">
            <input type="checkbox" id="readmore" />
            <div class="inner">
              <h1 class="poem-header"><?php echo $data[$i]['title'] ?></h1>
              <div class="boxing">
                <p class="box">
            <?php
                $string = $data[$i]['content'];
                $newString = substr($string, 0, strpos($string, "."));
                echo $newString.".";
            ?>
                </p>
                <p class="writer-name"><?php echo $data[$i]['author_name'] ?></p>
              </div>
              </div>
            <a href="post_info.php?post_target=<?php echo $data[$i]['id']; ?>&post_type=Poem" class="btn btn-info"><span class="w-25">See More</span></a>
          </div>
        </div>
      </div>
    </div>
    <hr style="border-top: solid #6C4A4A">
        <?php endfor ?>
        <p class="page-switch-paragraph">
      <a href="poems.php?limit=<?php echo ($_GET['limit']-1); ?>"><button class="btn btn-outline-dark font-size" type="button" name="button"> < </button></a>
      <span class="page-number">page <?php echo $_GET['limit']+1; ?> of <?php echo $y; ?></span>
      <a href="poems.php?limit=<?php echo ($_GET['limit']+1); ?>"><button class="btn btn-outline-dark font-size" type="button" name="button"> > </button></a>
     </p>
        <?php endif ?>
        <?php if($limit<4 && $limit>0 && $b>0 && $b<sizeof($data)):  ?>
        <?php for($i=0;$i<$limit;$i++): ?>
        <?php 
            if ($x==0) {
                break;
            }
          ?>
        <?php
            $image = get_image_with_id($data[$b]['media_id']);
            $image1 = explode(',',$image[0]['name']);
            $x--;
         ?>
    <div class="poem-body">
      <p class="date"><?php echo $data[$b]['created_at']; ?> </p>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <img src="image/<?php echo $data[$b]['title']; ?>/<?php echo $image1[0]; ?>" class="img-fluid">
        </div>
        <div class=" col-lg-6 col-md-6">
          <div class="outer">
            <input type="checkbox" id="readmore" />
            <div class="inner">
              <h1 class="poem-header"><?php echo $data[$b]['title'] ?></h1>
              <div class="boxing">
                <p class="box">
            <?php
                $string = $data[$b]['content'];
                $newString = substr($string, 0, strpos($string, "."));
                echo $newString.".";
            ?>
                </p>
                <p class="writer-name"><?php echo $data[$b]['author_name'] ?></p>
              </div>
              </div>
            <a href="post_info.php?post_target=<?php echo $data[$b]['id']; ?>&post_type=Poem" class="btn btn-info"><span class="w-25">See More</span></a>
          </div>
        </div>
      </div>
    </div>
    <hr style="border-top: solid #6C4A4A">
        <?php $b++; endfor ?>
        <p class="page-switch-paragraph">
      <a href="poems.php?limit=<?php echo ($_GET['limit']-1); ?>"><button class="btn btn-outline-dark font-size" type="button" name="button"> < </button></a>
      <span class="page-number">page <?php echo $_GET['limit']+1; ?> of <?php echo $y; ?></span>
      <a href="poems.php?limit=<?php echo ($_GET['limit']+1); ?>"><button class="btn btn-outline-dark font-size" type="button" name="button"> > </button></a>
     </p>
        <?php endif ?>
    </section>

</body>
</html>

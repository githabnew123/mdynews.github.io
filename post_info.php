<?php include 'parts/head.php' ?>
<body>
    <?php include 'parts/nav.php' ?>
    <?php
        if (isset($_GET['post_target']) && isset($_GET['post_type'])) {
           $id = $_GET['post_target'];
           $post_type = $_GET['post_type'];
           $data = post_info($id,$post_type);
        }
     ?>
     <div class="row container" style="margin-top: 130px;">
         <div class="col-lg-6">
                <?php
                    $image = get_image_with_id($data[0]['media_id']);
                    $image1 = explode(',',$image[0]['name']);
                    $limit = sizeof($image1)-1;
                    for($i=0;$i<$limit;$i++):
                ?>
            <img src="image/<?php echo $data[0]['title']; ?>/<?php echo $image1[$i]; ?>" class="img-fluid">
            <div class="font-weight-bold">
                <?php echo $image1[$i] ?>
            </div>
                <?php endfor ?>
         </div>
         <div class="col-lg-6">
            <h1 class="news-heading font-weight-bold"><?php echo $data[0]['title'] ?></h1>

             <div class="font-size text-justify">
                 <?php echo $data[0]['content']; ?>
             </div>
             <div class="font-size" style="text-align: right;">
                 <?php echo $data[0]['author_name'] ?><br>
                 (<?php echo $data[0]['created_at'] ?>)
             </div>
         </div>
     </div>
    <?php include 'parts/footer.php' ?>
</body>
</html>
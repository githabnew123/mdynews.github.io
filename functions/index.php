<?php session_start(); ?>
<?php if (isset($_SESSION['user'])): ?>
<?php include 'functions.php'; ?>
<?php include "pages/head.php" ?>

<body id="page-top">

  <?php include 'pages/nav.php'; ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'pages/side_bar.php'; ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <?php 
          if(isset($_POST['update'])){
            $data = update($_POST['id'],$_POST['post_type']);
            $address = explode(',', $data['address']);
            $building = explode(',', $data['type_of_building']);
            include 'update_form.php';
          }else{
            include 'post_form.php';
          }
        ?>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->



<?php include 'pages/footer_js.php'; ?>
</body>

</html>
<?php else:
    header('Location:login.php');
   endif; ?>

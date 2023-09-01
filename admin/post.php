<?php session_start(); ?>
<?php if (isset($_SESSION['user'])): ?>
<!DOCTYPE html>
<html lang="en">

  <?php include('parts/head.php'); ?>

<body id="page-top">

  <?php include('parts/nav.php'); ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('parts/side.php'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">
        <?php include('../functions/post_form.php') ?>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript-->
  <?php include('parts/js.php'); ?>

</body>

</html>

<?php else:
    header('Location:../admin/index.php');
   endif; ?>

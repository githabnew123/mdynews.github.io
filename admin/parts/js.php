<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $("#title_type").hide();
      $("#only_news").hide();
      $("#global_location").hide();
      $("#local_location").hide();
      $("#local_location1").hide();
      //$("#photo_video").hide();
      $("#general_type").change(function(){
        var selected = $("#general_type option:selected");
        if(selected.text()=="Global"){
          $("#local_location").hide(500);
          $("#local_location1").hide(500);
          $("#global_location").fadeIn(500);
        }else if (selected.text()=="Local") {
          $("#global_location").hide(500);
          $("#local_location").fadeIn(500);
          $("#local_location1").fadeIn(500);
        }
      })
      $("#news").click(function(){
            //$("#news").fadeIn(500);
            $("#news").prop('disabled', true);    
            $("#magazine").prop('disabled', false);    
            $("#poem").prop('disabled', false);
            $("#title_type").fadeIn(500);    
            $("#only_news").fadeIn(500);    
            $("#photo_video").fadeIn(500);    
      })
      $("#magazine").click(function(){
            $("#news").prop('disabled', false);    
            $("#magazine").prop('disabled', true);    
            $("#poem").prop('disabled', false); 
            $("#title_type").fadeIn(500);
            $("#photo_video").fadeIn(500);
            $("#only_news").fadeOut(500);
      })
      $("#poem").click(function(){
            $("#news").prop('disabled', false);    
            $("#magazine").prop('disabled', false);    
            $("#poem").prop('disabled', true);
            $("#title_type").fadeOut(500);
            $("#only_news").fadeOut(500);   
            $("#photo_video").fadeIn(500);   
      })
    })
  </script>
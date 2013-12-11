<!DOCTYPE html>
<head>
<?php
		include("head.html");
		?>
</head>

<body>
    

		<?php
		include("header.html");
		?>

<div class="container" id="content">

    <div class="row">
      <div class= "col-xs-3"></div>
      <div class= "col-xs-6">
       <p>Sorry, <?php
               echo "$pageName";?> is under construction! </p>
      </div>
      <div class= "col-xs-3"></div>
    </div>
  </div>



    <?php
    include("footer.html");
    ?>
   

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/stickUp.min.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
              //initiating jQuery
              jQuery(function($) {
                $(document).ready( function() {
                  //enabling stickUp on the '.navbar-wrapper' class
                  $('#nav_bar').stickUp();
                });
              });

            </script>

</body>
</html>
	

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
      <div class= "col-xs-2"></div>
      <div class= "col-xs-8">

		   <div id ="thickline" class="col-xs-12"></div>

       <div id ="thinline" class="col-xs-12"></div>

       <div id ="makeD" class="col-xs-12"><p class="ITCGaramondStd-BkCond">Hello World!</p> <p>MAKING DESIGNS</p> </div>

       <div class="col-xs-4" id = "condense">NATURAL</div> 
       <div class="col-xs-4" id = "condense">PLAYFUL</div>
       <div class="col-xs-4" id = "condense">USEFUL</div> 



	    </div>
      <div class= "col-xs-2"></div>
    </div>
  </div>















   

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


    <?php
    include("footer.html");
    ?>

</body>
</html>
	

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
   <script src="js/bootstrap.min.js"></script> 
   <script type="text/javascript" src="js/TimeCircles.js"></script>
   <script type="text/javascript">
   		$(document).ready(function () {
		    $('#carrera').click(function () {
		        $('#carrera-menu').addClass('in').removeClass('hide');
		        $('#viaje-menu').addClass('hide').removeClass('in');
		    });

		    $('#viaje').click(function () {
		        $('#viaje-menu').addClass('in').removeClass('hide');
		        $('#carrera-menu').addClass('hide').removeClass('in');
		    });
		});
   </script>
   </body>
</html>

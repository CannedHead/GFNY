<?php include 'header.php';?>  
<div class="col-xs-12 no-padding contacto">
	<img class="img-responsive" src="https://s3-sa-east-1.amazonaws.com/cannedhead.gfny/contacto.jpg">
	<div class="hidden-xs col-sm-2 col-sm-offset-5 logo-contact">
		<img class="img-responsive" src="https://s3-sa-east-1.amazonaws.com/cannedhead.gfny/LOGO+GFNY.svg">
	</div>		
	<h1 class="text-center">¿TIENES PREGUNTAS?</h1>
</div>
<div class="container contactform">
	<form class="form ">
		<div class="col-sm-5">
			<div class="form-group">
				<label for="inputName">Nombre</label>
				<input type="text" class="form-control" id="inputName">
			</div>
			<div class="form-group">
			    <label for="inputEmail">Mail</label>
			    <input type="email" class="form-control" id="inputEmail">
			</div>
		</div>
		<div class="col-sm-7">
			<div class="form-group">
			    <label for="inputQuestion">Pregunta</label>
			    <textarea class="form-control" rows="4"></textarea> 
			</div>
			<input class="btn btn-block btn-lg btn-gfny" type="submit" value="Enviar">
		</div>		
	</form>
</div>
<?php include 'footer.php';?>    
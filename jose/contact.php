<?php

if (empty($_POST['nombre']) 
|| empty($_POST['email']) 
|| empty($_POST['mensaje'])){
	include("error.php");
	}else{
		include('functions.php');
		if(Validar(
			$_POST['nombre'],
			$_POST['email'],
			$_POST['mensaje'],
			$_POST['telefono']
			)
			){
				$finalMensaje= array('nombre' => $_POST['nombre'],'apellido'=>$_POST['apellido'],'referencia'=>$_POST['referencia'],'telefono'=>$_POST['telefono'],'email' => $_POST['email'], 'mensaje' => $_POST['mensaje']);
				
				$finalMensaje=Sanitizar($finalMensaje);
				
        		Enviar($finalMensaje['nombre'],$finalMensaje['apellido'],$finalMensaje['referencia'],$finalMensaje['telefono'],$finalMensaje['email'],$finalMensaje['mensaje']);
			} else {
				echo "fallo";
			}
		
	


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/jose.css">
</head>
<body>
<section class="holder ">
	<div class="custom">
		<h1 class="banner-h4">GRACIAS RESPONDEREMOS EN BREVE</h1>
	</div>
	<p>You will be redirected in <span id="counter">10</span> second(s).</p>

</section>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'index.html';
    }
if (parseInt(i.innerHTML)!=0) {
    i.innerHTML = parseInt(i.innerHTML)-1;
}
}
setInterval(function(){ countdown(); },1000);
</script>	
</body>
</html>
<?php } ?>
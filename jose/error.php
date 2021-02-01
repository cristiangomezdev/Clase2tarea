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
		<h1 class="banner-h4">OCURRIO UN ERROR</h1>
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
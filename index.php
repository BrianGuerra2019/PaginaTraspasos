<?php 
	session_start();
	if (isset($_SESSION['nombre'])) {
		header('Location: admin/admin.html');
	}
?>

<!DOCTYPE html>
<html>
	
<head>
	<title>TRASPASOS
	</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	
				 <!-----start-main---->
				<div class="login-form">
						<h1>Traspasos Nissan</h1>
						<h2><a href="#">Crear Cuenta</a></h2>
				<form method="POST" action="conexion/conectar.php">
					<li>
						<input type="text" class="text" value="Usuario" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Usuario';}" ><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
					</li>
					
					 <div class ="forgot">
						<h3><a href="./rec-pass.html">Olvidaste la contraseña?</a></h3>
						<input type="submit" onclick="myFunction()" value="Entrar" > <a href="./admin/admin.html" class=" icon arrow"></a>                                                                                                                                                                                                                                 </h4>
					</div>
					<div class ="forgot">
						<h3><a href="./cam-pass.html">Cambiar contraseña?</a></h3>                                                                                                                                                                                                                             </h4>
					</div>
				</form>
			</div>
			<!--//End-login-form-->
					<div class="ad728x90" style="text-align:center">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- w3layouts_demo_728x90 -->
				<ins class="adsbygoogle"
				     style="display:inline-block;width:728px;height:90px"
				     data-ad-client="ca-pub-9153409599391170"
				     data-ad-slot="8639520288"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
		   </div>

</body>
</html>
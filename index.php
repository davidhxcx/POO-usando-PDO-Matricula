<?php
function __autoload($class_name){
    require_once 'classes/' . $class_name . '.php';
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Sistema Escola</title>
	<meta charset='UTF-8'>
	<link href="../assets/css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    
    <?php
        
        $usuarios = new Usuarios();

    ?>
<div class="wrapper-login">
	<div class="container-login">
		<h1>Bem Vindo</h1>
		<form method="POST" action="login.php">
			<input class="input-type" type="text" name="username" placeholder="Username">
			<input class="input-type" type="password" name="password" placeholder="Password">
			<button type="submit" name="logar" class="entrar-button">Entrar</button>
		</form>
		<p>Login: root/tsi14 </p>
	</div>
</div>
</body>
<?php require_once("funcoes.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Painel de Login</title>
	<?php 
	loadCSS('reset');
	loadCSS('mdl-google');
	loadCSS('style');
	loadJS('mdl-google');
	loadJS('jquery');
	loadJS('geral');
	?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<?php loadmodulo('usuarios','login'); ?>
</body>
</html>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
<!--Acesso via dispositivo móvel-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Título Site-->
	<title>New Google</title>
<!--CSS-->
<!--<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">-->
	<link rel="stylesheet" href="css/style.css">
<!--JS-->
	<script src="js/script.js"></script>
<!--CDN Google Material Designe Lite-->
	<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.cyan-indigo.min.css"/>
	<script src="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--JQuery-->
<!--<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>-->
<!--JQuery Mobile-->
<!--<script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script>-->
<!--Bootstrap-->
</head>

<body><!--Página completa-->
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"><!--deixar o drawer fixo: mdl-layout--fixed-drawer--><!--Layout da Página-->
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">Bom dia Sr. Vitor</span>
				<div class="mdl-layout-spacer"></div>
				<nav class="mdl-navigation">
					<a href="#" class="mdl-navigation__link">Mensagens</a>
					<a href="#" class="mdl-navigation__link">Período Letivo</a>
					<a href="#" class="mdl-navigation__link">Sair</a>
				</nav>	
			</div>
		</header>
		<div class="mdl-layout__drawer"><!--Início do Menu lateral-->
			<span class="mdl-layout-title">WEBGiz</span>
			<nav class="mdl-navigation">
				<ul id="nav">
                    <li><a href="#" class="mdl-navigation__link">Home</a></li>
					<li><a href="#" class="mdl-navigation__link">Usuários</a>
						<ul>
							<li><a href="#" class="mdl-navigation__link">Cadastar</a></li>
							<li><a href="#" class="mdl-navigation__link">Exibir</a></li>
						</ul>
					</li>
					<li><a href="#" class="mdl-navigation__link">Módulos</a>
                    	<ul>
                            <li><a href="#" class="mdl-navigation__link">Cadastar</a></li>
                            <li><a href="#" class="mdl-navigation__link">Exibir</a></li>
                    	</ul>
                    </li>
					<li><a href="#" class="mdl-navigation__link">Sair</a></li>
				</ul>
			</nav>	
		</div><!--Final do Menu lateral-->
	</div><!--Final do Layout da Página-->
</body>
</html>
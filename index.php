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
					<a href="https://www.google.com.br" class="mdl-navigation__link">Mensagens</a>
					<a href="" class="mdl-navigation__link">Período Letivo</a>
					<a href="" class="mdl-navigation__link">Sair</a>
				</nav>	
			</div>
		</header>
		<div class="mdl-layout__drawer"><!--Início do Menu lateral-->
			<span class="mdl-layout-title">WEBGiz</span>
			<nav class="mdl-navigation">
				<ul id="nav">
					<li><a href="#" class="mdl-navigation__link">Dados Pessoais</a>
						<ul>
							<li><a href="#" class="mdl-navigation__link">Papéis</a></li>
							<li><a href="#" class="mdl-navigation__link">Papel/Pessoa</a></li>
							<li><a href="#" class="mdl-navigation__link">Web Athena do Funcionário</a></li>
							<li><a href="#" class="mdl-navigation__link">Alterar Senha</a></li>
						</ul>
					</li>
					<li><a href="#" class="mdl-navigation__link">Protocolo</a>
                    	<ul>
                    		<li><a href="#" class="mdl-navigation__link">Tipo Requerimento</a></li>
                            <li><a href="#" class="mdl-navigation__link">Situação</a></li>
                            <li><a href="#" class="mdl-navigation__link">Documentos</a></li>
                            <li><a href="#" class="mdl-navigation__link">Setores/Orgãos</a></li>
                            <li><a href="#" class="mdl-navigation__link">Parâmetros</a></li>
                            <li><a href="#" class="mdl-navigation__link">Pendências (0/0)</a></li>
                            <li><a href="#" class="mdl-navigation__link">Realizar Requerimento</a></li>
                            <li><a href="#" class="mdl-navigation__link">Consulta de Requerimento</a></li>
                            <li><a href="#" class="mdl-navigation__link">Etiquetas</a></li>
                            <li><a href="#" class="mdl-navigation__link">Relatórios</a></li>
                            <li><a href="#" class="mdl-navigation__link">Andamentos (0/0)</a></li>
                            <li><a href="#" class="mdl-navigation__link">Cadastro de Remessa</a></li>
                    		<li><a href="#" class="mdl-navigation__link">Consulta de Remessa</a></li>
                    		<li><a href="#" class="mdl-navigation__link">Andamento de Remessa</a></li>
                    		<li><a href="#" class="mdl-navigation__link">Cadastro de Formas de Envio</a></li>
                    	</ul>
                    </li>
					<li><a href="#" class="mdl-navigation__link">Concurso</a>
                        <ul>
                            <li><a href="#" class="mdl-navigation__link">Lançamento de respostas</a></li>
                            <li><a href="#" class="mdl-navigation__link">Ranqueamento</a></li>
                            <li><a href="#" class="mdl-navigation__link">Concursos</a></li>
                            <li><a href="#" class="mdl-navigation__link">Vagas designação</a></li>
                            <li><a href="#" class="mdl-navigation__link">Critérios de classificação</a></li>
                            <li><a href="#" class="mdl-navigation__link">Critérios</a></li>
                            <li><a href="#" class="mdl-navigation__link">Critérios concurso</a></li>
                            <li><a href="#" class="mdl-navigation__link">Validar lançamentos</a></li>
                            <li><a href="#" class="mdl-navigation__link">Relatório concurso designação</a></li>
                        </ul>
                    </li>
					<li><a href="#" class="mdl-navigation__link">Seletiva de matrícula</a>
                        <ul>
                            <li><a href="#" class="mdl-navigation__link">Etapas de aprovação</a></li>
                            <li><a href="#" class="mdl-navigation__link">Gerenciar inscrições</a></li>
                            <li><a href="#" class="mdl-navigation__link">Quantificar Inscrições</a></li>
                            <li><a href="#" class="mdl-navigation__link">Quantificar por escola de origem</a></li>
                            <li><a href="#" class="mdl-navigation__link">Validação de requisitos</a></li>                    	
                        </ul>
                    </li>
					<li><a href="#" class="mdl-navigation__link">Processo Seletivo</a>
                        <ul>
                            <li><a href="#" class="mdl-navigation__link">Locais de Exame</a></li>
                            <li><a href="#" class="mdl-navigation__link">Salas de Exame</a></li>
                        </ul>
                    </li>
					<li><a href="#" class="mdl-navigation__link">Geral</a>
                        <ul>
                            <li><a href="#" class="mdl-navigation__link">Configurações</a></li>
                            <li><a href="#" class="mdl-navigation__link">Log de Acessos</a></li>
                            <li><a href="#" class="mdl-navigation__link">Comunicações</a></li>
                            <li><a href="#" class="mdl-navigation__link">Tipo de Atividades</a></li>
                            <li><a href="#" class="mdl-navigation__link">Funcionalidades</a></li>
                            <li><a href="#" class="mdl-navigation__link">Tipo de Requerimento do Curso</a></li>
                            <li><a href="#" class="mdl-navigation__link">Parâmetros de Etapa</a></li>
                            <li><a href="#" class="mdl-navigation__link">Painéis</a></li>
                        </ul>
                    </li>
					<li><a href="#" class="mdl-navigation__link">Agenda</a>
                        <ul>
                            <li><a href="#" class="mdl-navigation__link">Agenda</a></li>
                            <li><a href="#" class="mdl-navigation__link">Disponibilidade Agenda</a></li>
                            <li><a href="#" class="mdl-navigation__link">Tipo de Agenda</a></li>
                            <li><a href="#" class="mdl-navigation__link">Relatório de Agendamento</a></li>
                        </ul>
                    </li>
					<li><a href="#" class="mdl-navigation__link">Contas Google</a>
                        <ul>
                            <li><a href="#" class="mdl-navigation__link">Criar Contas Google</a></li>
                            <li><a href="#" class="mdl-navigation__link">Suspender Contas Google</a></li>
                            <li><a href="#" class="mdl-navigation__link">Reativar Contas Google Suspensas</a></li>
                        </ul>
                    </li>
				</ul>
			</nav>	
		</div><!--Final do Menu lateral-->
		<div class="mdl-layout__content backgroud">
            <main class="margim-main backgroud-branco">
                <div class="page-content">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell-6-col"><p>6</p></div>
                        <div class="mdl-cell mdl-cell-4-col"><p>4</p></div>
                        <div class="mdl-cell mdl-cell-2-col"><p>2</p></div>
                    </div>
                </div>
            </main>
            <footer class="mdl-mini-footer"><!--Início do Rodapé-->
                <div class="mdl-mini-footer--right-section">
                    <div class="mdl-logo"><strong>WEBGiz</strong></div>
                </div>
            </footer><!--Final do Rodapé-->
		</div>
	</div><!--Final do Layout da Página-->
</body>
</html>
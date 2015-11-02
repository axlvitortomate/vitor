<?php 
require_once(dirname(dirname(__FILE__))."/funcoes.php");
protegeArquivo(basename(__FILE__));

switch ($tela) {
	case 'login': ?>
			<div class="login" id="loginform">
				<div class="mdl-card mdl-shadow--2dp">
					<div class="mdl-card__title">
						<h2 class="mdl-card__title-text">Faça o Login</h2>
					</div>	
					<form class="mdl-form" method="post" action="">
						<div class="group">
							<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  maxlength="100" value="<?php echo $_post['email'] ?>" required>
							<label for="email">E-mail</label>
							<span class="bar"></span>
						</div>
						<div class="group">
							<input type="password" name="password" maxlength="100" value="<?php echo $_post['password'] ?>" required>
							<label for="password">Password</label>
							<span class="bar"></span>
						</div>
						<div class="mdl-card__actions mdl-card__border">
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised">Entrar</button>
						</div>
					</form>
				</div>
			</div>
		<?php 
		break;
	
	default:
		echo '<p>A tela solicitada não existe.</p>';
		break;
}
?>
<?php 
inicializa();
function inicializa(){
	if(file_exists(dirname(__FILE__).'/config.php')):
		require_once(dirname(__FILE__).'/config.php');
	else:
		die(utf8_decode('O arquivo de configuração não foi localizado, contate o administrador.'));
	endif;
	if(!defined("BASEPATH") || !defined("BASEURL")):
		die(utf8_decode('Faltam configurações básicas do sistema, contate o adminsitrador.'));
	endif;
	require_once(BASEPATH.CLASSESPATH.'autoload.php');
}

function loadCSS($arquivo=null,$media='screen',$import=FALSE){
	if ($arquivo != NULL):
		if ($import==TRUE):
			echo '<style type="text/css">@import url("'.BASEURL.CSSPATH.$arquivo.'.css");</style>'."\n";
		else:
			echo '<link rel="stylesheet" type="text/css" href="'.BASEURL.CSSPATH.$arquivo.'.css" media="'.$media.'" />'."\n";
		endif;
	endif;
}

function loadJS($arquivo=null,$remoto=FALSE){
	if ($arquivo != NULL):
		if($remoto==FALSE) $arquivo = BASEURL.JSPATH.$arquivo.'.js';
		echo '<script type="text/javascript" src="'.$arquivo.'"></script>'."\n";
	endif;
}

function loadFONTS($arquivo=null,$media='screen',$import=FALSE){
	if ($arquivo != NULL):
		if ($import==TRUE):
			echo '<style type="text/css">@import url("'.BASEURL.FONTPATH.$arquivo.'.css");</style>'."\n";
		else:
			echo '<link rel="stylesheet" type="text/css" href="'.BASEURL.FONTPATH.$arquivo.'.css" media="'.$media.'" />'."\n";
		endif;
	endif;
}

function loadmodulo($modulo=NULL,$tela=NULL){
	if($modulo==NULL || $tela==NULL):
		echo '<p>Erro na função <strong>'.__FUNCTION__.'</strong>: faltam parâmetros para execução.</p>';
	else:
		if (file_exists(MODULOSPATH."$modulo.php")):
			include_once(MODULOSPATH."$modulo.php");
		else:
			echo '<p>Módulo inexistente neste sistema!</p>';
		endif;
	endif;
}

function protegeArquivo($nomeArquivo,$redirPara='index.php?erro=3'){
	$url = $_SERVER["PHP_SELF"];
	if(preg_match("/$nomeArquivo/i", $url)):
		//redireciona para outra url
		redireciona($redirPara);
	endif;
}

function redireciona($url=''){
	header("Location: ".BASEURL.$url);
}
?>
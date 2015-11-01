<?php 
require_once("classes/clientes.class.php");
$cliente = new clientes();
//$cliente->setValor('nome','Vitor');
//$cliente->setValor('sobrenome','Silva');
$cliente->valorpk = 1;
$cliente->delCampo('nome');

//$cliente->inserir($cliente);
//echo '<br />_____________________________';
//echo '<br />'. $cliente->linhasafetadas.' registro(s) incluido(s) com sucesso';
//$cliente->atualizar($cliente);
//$cliente->deletar($cliente);
//$cliente->extras_select = "LIMIT 3";
//$cliente->selecionaTudo($cliente);
$cliente->selecionaCampos($cliente);
while($res = $cliente->retornaDados()):
	echo $res->id . ' | '. $res->nome .' | '. $res->sobrenome .'<br />';
endwhile;


echo '<hr />';
echo '<pre>';
print_r($cliente);
echo '</pre>';
?>
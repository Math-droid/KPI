<?php
require_once("../Model/conexao.php");
require_once("../Model/bancoContato.php");
include_once("../View/header.php");
 
extract($_REQUEST,EXTR_OVERWRITE);
 
 
if(adicionarBL($conexao,$qtd_Bolsas,$qtd_erroB,$acurB)){
echo("As informações do Contato foram salvas");
 
}else{
echo("Alerta!!! As informações do Contato Não foram salvas");
}
 
?>
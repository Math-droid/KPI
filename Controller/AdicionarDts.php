<?php
require_once("../Model/conexao.php");
require_once("../Model/bancoKPIs.php");
include_once("../View/header.php");
 
extract($_REQUEST,EXTR_OVERWRITE);
 
 
if(adicionarDts($conexao,$qtd_Dts,$qtd_erroDts,$acurDts)){
echo("As informações do Contato foram salvas");
 
}else{
echo("Alerta!!! As informações do Contato Não foram salvas");
}
 

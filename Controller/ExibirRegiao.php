<?php
include_once("../Model/conexao.php");
include_once("../Model/bancoContato.php");
 
extract($_REQUEST,EXTR_OVERWRITE);
 
buscarDataID($conexao,$data);
 
header("Location: ../View/buscar.php");
?>
<?php
include_once("../Model/conexao.php");
include_once("../Model/bancoKPIs.php");
 
extract($_REQUEST,EXTR_OVERWRITE);
 
buscarIdDts($conexao,$Id_Dts);
 
header("Location: ../View/buscar_del.php");

<?php
function adicionarDts($conexao,$qtd_Dts,$qtd_Erro,$acurDts){
    $query = "insert into dtstb(qtd_Dts,qtd_erroDts,acurDts)values('{$qtd_Dts}','{$qtd_Erro}','{$acurDts}')";
    return mysqli_query($conexao,$query);
}
 
function adicionarBL($conexao,$qtd_Bolsas,$qtd_erroB,$acurB){
    $query = "insert into bolsastb(qtd_Bolsas,qtd_erroB,acurB)values('{$qtd_Bolsas}','{$qtd_erroB}','{$acurB}')";
    return mysqli_query($conexao,$query);
}
function adicionarCxEtq($conexao,$qtd_CxEtq,$qtd_ErroCxEtq,$acurCxEtq){
    $query = "insert into separacoes(qtd_CxEtq,qtd_ErroCxEtq,acurCxEtq)values('{$qtd_CxEtq}','{$qtd_ErroCxEtq}','{$acurCxEtq}')";
    return mysqli_query($conexao,$query);
}
 
function buscarDataID($conexao, $data){
    $query = "Select * from separacoes where data = '{$data}'";
    $result = mysqli_query($conexao,$query);
    $result = mysqli_fetch_array($result);
    return $result;
}

function deletardts($conexao,$Id_Dts){
    $query = "Delete from dtstb where Id_Dts = '{$Id_Dts}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}
function deletarBl($conexao,$Id_Bolsas){
    $query = "Delete from bolsastb where Id_Bolsas = '{$Id_Bolsas}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}
function deletarCxEtq($conexao,$Id_CxEtq){
    $query = "Delete from cxetqtb where Id_CxEtq = '{$Id_CxEtq}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}
?>
<?php
include_once("header.php");
include_once("../Model/conexao.php");
include_once("../Model/bancoKPIs.php");
?>
<!-- inicio formulario -->
<div class="container m-4">
<form class="row g-3" method="POST" action="#">
<div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputcodigo" class="col-form-label">Digite a Data</label>
    </div>
    <div class="col-auto">
        <input type="text" id="inputcodigo" name="data" class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
         <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</div>
<!--fim formulario -->
 
<!--inicio tabela-->
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Região</th>
      <th scope="col">Quantidade Total</th>
      <th scope="col">Acuracidade</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
    <tbody>
        <?php
            extract($_REQUEST,EXTR_OVERWRITE);
        
            $reg = isset($data)?$data : "";
            
            if($data){
            
            $dados = buscarDataID($conexao,$data);
        
            foreach($dados as $historico) :
            ?>
            <tr>
                <th scope="row"> <?php echo($historico["Id_Kpi"]);?> </th>
                <td> <?php echo($historico["data"])?> </td>
            </tr>
            <?php
            endforeach;
            }
            ?>
    </tbody>
</table>
<!--fim tabela-->
 
</div>
<?php
include_once("footer.php");
?>
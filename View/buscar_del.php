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
      <label for="reg" class="col-form-label">Digite a Região </label>
      <select id="Reg" name="reg">
        <option value="DTS" name="DTS" selected>DTS </option>
        <option value="Bolsas" name="Bolsas">BOLSAS</option>
        <option value="CxEtq" name="CxEtq">CxEtq</option>
      </select>
    </div>
  <button type="submit" class="btn btn-primary">Buscar</button>
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

            $reg = isset($_REQUEST['reg']) ?: "";
            
            switch($reg) {
            case "DTS":
            $dados = buscarIdDts($conexao,$Id_Dts);
            foreach($dados as $historicoDTS) :
            ?>
            <tr>
                <th scope="row"> <?=($historicoDTS["Id_Dts"]);?> </th>
                <td> <?=($historicoDTS["qtd_Dts"]);?> </td>
                <td> <?=($historicoDTS["qtd_erroDts"]);?> </td>
                <td> <?=($historicoDTS["acurDts"]);?> </td>
                <td> <?=($historicoDTS["data"]);?> </td>
            </tr>
            <?php
            endforeach;
            break;
            }
            switch($reg) {
              case "Bolsas":
              $dados = buscarIdBL($conexao,$Id_Bolsas);
              foreach($dados as $historicoBolsas) :
              ?>
              <tr>
                  <th scope="row"> <?=($historicoBolsas["Id_Bolsas"]);?> </th>
                  <td> <?=($historicoBolsas["qtd_Bolsas"]);?> </td>
                  <td> <?=($historicoBolsas["qtd_erroB"]);?> </td>
                  <td> <?=($historicoBolsas["acurB"]);?> </td>
                  <td> <?=($historicoBolsas["data"]);?> </td>
              </tr>
              <?php
              endforeach;
              break;
              }
              switch($reg) {
                case "CxEtq":
                $dados = buscarIdDts($conexao,$Id_Dts);
                foreach($dados as $historicoDTS) :
                ?>
                <tr>
                    <th scope="row"> <?=($historicoDTS["Id_Dts"]);?> </th>
                    <td> <?=($historicoDTS["qtd_Dts"]);?> </td>
                    <td> <?=($historicoDTS["qtd_erroDts"]);?> </td>
                    <td> <?=($historicoDTS["acurDts"]);?> </td>
                    <td> <?=($historicoDTS["data"]);?> </td>
                </tr>
                <?php
                endforeach;
                break;
                }
            ?>
    </tbody>
</table>
<!--fim tabela-->
 
</div>
<?php
include_once("footer.php");
?>
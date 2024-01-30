
<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoKPIs.php");
?>
<!-- inicio formulario -->
<div class="container m-4">
<form class="row g-3" method="POST" action="#">
<div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputcodigo" class="col-form-label">Digite a Data</label>
    </div>
    <div class="col-auto">
        <input type="text" id="inputcodigo" name="data"class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
         <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</div>
</form>
<!--fim formulario -->
 
<!--inicio tabela-->
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Região</th>
      <th scope="col">Quantidade Total</th>
      <th scope="col">Acuracidade</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php
     extract($_REQUEST,EXTR_OVERWRITE);
 
     $data = isset($data)?$data : "";
     
     if($data){
       
       $dados = buscarDataID($conexao,$data);
 
     foreach($dados as $historico) :
     ?>
    <tr>
    <th scope="row"> <?php echo($historico["Id_Kpi"]);?> </th>
      <td> <?php echo($historico["data"])?> </td>
  
      <td>
     <!-- Button trigger modal -->
<button type="button" Id_Kpi="<?=$contatos["Id_Kpi"]?>" nomecontato="<?=$contatos["nomeContato"]?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarModal">
  Deletar
</button>
      </td>
    </tr>
       <?php
       endforeach;
      }
       ?>
  </tbody>
</table>
<!--fim tabela-->
</div>
 
<!-- Modal -->
<div class="modal fade" id="deletarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Atenção na Exclusão</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <form action="../Controller/deletarContato.php" method="post">
          <input type="hidden" value="" class="idContato from-control" name="idContato">
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
 
      </div>
    </div>
  </div>
</div>
<script>
    let deletarContatoModal = document.getElementById('deletarModal');
        deletarContatoModal.addEventListener('show.bs.modal', function(event) {
    let button = event.relatedTarget;
    let idContato = button.getAttribute('idcontato');
    let nome_contato = button.getAttribute('nomecontato');
 
    let modalBody = deletarContatoModal.querySelector('.modal-body');
    modalBody.textContent = 'Deseja realmente excluir o Contato ' + nome_contato +'?'
 
    let IDContato = deletarContatoModal.querySelector('.modal-footer .idContato');
    IDContato.value = idContato;
  })
</script>
<?php
include_once("footer.php");
?>
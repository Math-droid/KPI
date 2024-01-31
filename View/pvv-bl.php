<?php
 include_once("header.php");
  include_once("../Model/conexao.php");
  include_once("../Model/bancoKPIs.php");
?>
<div class="container">
    <div class="box">
        <!-- Caixa do PVV-->
        <h2>KPI's PVV - Bolsas
        </h2>
        <input type="number" id="PEC1" placeholder="Quantidade Pec">
        <input type="number" id="Local1" placeholder="Quantidade Local">
        <input type="number" id="Erro1"  placeholder="Erros">
        <button onclick="calculatePVV()" >Calcular</button>
        <button type="reset" onclick="cleanBl()">Limpar</button>
        <p id="result1"></p>
    </div>
</div> 

<script>   //CalculoPVV
    function calculatePVV() {
            let pec1 = document.getElementById('PEC1').value;
            let local1 = document.getElementById('Local1').value;
            let erro1 = document.getElementById('Erro1').value;
            
            let sum1 = parseFloat(pec1) + parseFloat(local1);
            let acur1 = parseFloat(erro1)/parseFloat(pec1)*100-100;
            let resultText = `
                    <form method="GET" action="../Controller/AdicionarBl.php">
                        <strong>Quantidade PEC: </strong> <input type="text" name="teste" value="${pec1}"><br>
                        <strong>Total PVV:  </strong> <input type="text" name="qtd_Bolsas"   value="${sum1}"><br>
                        <strong>Erros:  </strong> <input type="text" name="qtd_erroB"   value="${erro1}"><br>
                        <strong>Acuracidade PVV:  </strong> <input type="text" name="acurB"   value="${acur1}">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                    `;
                    document.getElementById('result1').innerHTML = resultText;
        }    

    function cleanBl(){
            document.getElementById('PEC1').value="";
            document.getElementById('Local1').value="";
            document.getElementById('Erro1').value="";
            document.getElementById("result1").innerHTML=""
            
        }
</script>
<?php

include_once("footer.php");
?>
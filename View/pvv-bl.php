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
    <input type="number" id="Erro1" name="qtd_erroDts" placeholder="Erros">
    <button onclick="calculatePVV()" >Calcular</button>
    <button onclick="cleanBl()">Limpar</button>

    <p id="result1"></p>
    </div>
</div> 

<script>   //Calculo DTS
    function calculatePVV() {
            let pec1 = document.getElementById('PEC1').value;
            let local1 = document.getElementById('Local1').value;
            let erro1 = document.getElementById('Erro1').value;
            
              let sum1 = parseFloat(pec1) + parseFloat(local1);
              let acur1 = parseFloat(erro1)/parseFloat(pec1)*100-100;
              let resultText = `<strong>Total PVV:  </strong> ${sum1}<br>
                    <strong>Quantidade PEC: </strong>${pec1}<br>
                    <strong>Erros:  </strong> ${erro1}<br>
                    <strong>Acuracidade PVV:  </strong> ${acur1}`;
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
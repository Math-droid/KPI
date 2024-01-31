<?php
    include_once("header.php");
    include_once("../Model/conexao.php");
   include_once("../Model/bancoKPIs.php");
?>
    <div class="container">
        <div class="box">
            <h2>KPI's DTS </h2>
            <!-- Caixa do DTS-->

            <input type="number" id="PEC" placeholder="Quantidade Pec">
            <input type="number" id="Local" placeholder="Quantidade Local">
            <input type="number" id="Erro" name="qtd_erroDts" placeholder="Erros">
            <button onclick="calculateDTS()" >Calcular</button>
            <button type="reset" onclick="cleanDts()">Limpar</button>
            <p id="result"></p>

        </div>
    </div>
    <?php 

//$n = ("<script>sum </script>");
//echo($n);
?>

    <script> //Calculo DTS
        function calculateDTS() {
            let pec = document.getElementById('PEC').value;
            let local = document.getElementById('Local').value;
            let erro = document.getElementById('Erro').value;
            
            let sum = parseFloat(pec) + parseFloat(local);
            let acur = parseFloat(erro)/parseFloat(pec)*100-100;

               let resultText2 = `
               <form method="GET" action="../Controller/AdicionarDts.php">
                    <strong>Total DTS:  </strong> <input type="text" name="qtd_Dts"   value="${sum}"><br>
                    <strong>Erros:  </strong><input type="text"  name="qtd_erroDts" value="${erro}"><br>
                    <strong>Acuracidade DTS:  <input type="text" name="acurDts"   value="${acur}"><br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                `;

                document.getElementById('result').innerHTML = resultText2 

        }    
        

               
        function cleanDts(){
            document.getElementById('PEC').value="";
            document.getElementById('Local').value="";
            document.getElementById('Erro').value="";
            document.getElementById("result").innerHTML ="";
            document.get
        }

    </script>
<?php

include_once("footer.php");
?>
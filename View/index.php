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
            <input type="number" id="Erro" placeholder="Erros">
            <button onclick="calculateDTS()">Calcular</button>
            <button onclick="cleanDts()">Limpar</button>
            <p id="result"></p>

        </div>
    </div>
    <?php 

//$n = ("<script>sum </script>");
//echo($n);
?>

    <script>
        function calculateDTS() {
            let pec = document.getElementById('PEC').value;
            let local = document.getElementById('Local').value;
            let erro = document.getElementById('Erro').value;
            //Calculo DTS
            let sum = parseFloat(pec) + parseFloat(local);
            let acur = parseFloat(erro)/parseFloat(pec)*100-100;

               let resultText2 = `
               <form action="GET" method="../Controller/AdicionarDts.php">
                <strong>Total DTS:  </strong> <input type="text" name="qtd_Dts"   value="${sum}"><br>
                    <strong>Erros:  </strong><input type="text" name="qtd_ErroDts"   value="${erro}"><br>
                    <strong>Acuracidade DTS:  <input type="text" name="acurDts"   value="${acur}">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                `;

                document.getElementById('result').innerHTML = resultText2;

        }    
        

                document.getElementById('acurDts7').innerHTML = acur;
                document.getElementById('qtd_Dts7').innerHTML = sum;
                document.getElementById('Erro7').innerHTML = erro;
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
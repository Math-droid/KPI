<?php
    include_once("header.php");
    //include_once("../Model/conexao.php");
   //include_once("../Model/bancoContato.php");
?>
    <div class="container">
        <div class="box">
            <h2>KPI's DTS </h2>
            <!-- Caixa do DTS-->
            <input type="number" id="PEC" placeholder="Quantidade Pec">
            <input type="number" id="Local" placeholder="Quantidade Local">
            <input type="number" id="Erro" placeholder="Erros">
            <button onclick="calculate('DTS')">Calcular</button>
            <button onclick="clean()">Limpar</button>
            
            <p id="result"></p>
        </div>
    </div>

    <script>
        function calculate(kpiType) {
            //DTS value
            let pec = document.getElementById('PEC').value;
            let local = document.getElementById('Local').value;
            let erro = document.getElementById('Erro').value;
            
            //Calculo DTS
            let sum = parseFloat(pec) + parseFloat(local);
            let acur = parseFloat(erro)/parseFloat(pec)*100-100;

            //PVV value
            let pec1 = document.getElementById('PEC1').value;
            let local1 = document.getElementById('Local1').value;
            let erro1 = document.getElementById('Erro1').value;

            //Calculo PVV
            let sum1 = parseFloat(pec1) + parseFloat(local1);
            let acur1 = parseFloat(erro1)/parseFloat(pec1)*100-100;

            let resultText = ""; 

            switch(kpiType){
                case 'PVV':
                resultText1 = `<strong>Total PVV:  </strong> ${sum1}<br>
                <strong>Quantidade PEC: </strong>${pec1}<br>
                <strong>Erros:  </strong> ${erro1}<br>
                <strong>Acuracidade PVV:  </strong> ${acur1}`;
                document.getElementById('result1').innerHTML = resultText1;
                break
                case 'DTS':
                resultText2 = `<strong>Total DTS:  </strong> ${sum}<br>
                <strong>Erros:  </strong> ${erro}<br>
                <strong>Acuracidade DTS:  </strong>${acur}`;
                document.getElementById('result').innerHTML = resultText2;
                break
                
            }
            

            
        }    
        function clean(){
            document.getElementById('PEC').value="";
            document.getElementById('Local').value="";
            document.getElementById('Erro').value="";
            document.getElementById("result").innerHTML ="";
            document.get
        }function clean1(){
            document.getElementById('PEC1').value="";
            document.getElementById('Local1').value="";
            document.getElementById('Erro1').value="";
            document.getElementById("result1").innerHTML=""
            document.getElementsByClassName('BLchecked').innerHTML=0
        }

    </script>
<?php

include_once("footer.php");
?>
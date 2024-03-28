
<?php
        if(isset($_POST['priNum']) && isset($_POST['segNum'])){
        $priNum = $_POST['priNum'];
        $segNum = $_POST['segNum'];
        $operação = $_POST['calculo'];
        }
        
        if ($operação == 'soma'){
            ?> <br> <?php
            echo "<h3>A soma de ".$priNum ." + " .$segNum. " é igual a ". $priNum + $segNum; 
        }
        if ($operação == 'sub'){
            ?> <br> <?php
            echo "<h3> A subtração de ".$priNum ." - " .$segNum. " é igual a ". $priNum - $segNum;
            echo "<h3> A subtração de ".$segNum ." - " .$priNum. " é igual a ". $segNum - $priNum;
        }
        if ($operação == 'mul'){
            ?> <br> <?php
            echo "<h3> A multiplicação de ".$priNum ." x " .$segNum. " é igual a ". $priNum * $segNum;
        }
        if ($operação == 'div'){
            ?> <br> <?php
            echo "<h3> A divisão de ".$priNum ." / " .$segNum. " é igual a ". $priNum / $segNum;
            echo "<h3> A divisão de ".$segNum ." / " .$priNum. " é igual a ". $segNum / $priNum;
        } 
?>
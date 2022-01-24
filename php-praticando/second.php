<?php
//recebendo o valor do input 'n1' digitado na tela anterior
$n1 = $_POST['n1'];

//if
if ($n1 <21){
    //for
    for ($i=0; $i<$n1; $i++){
        echo 'Você digitou ' .$n1. ', então essa mensagem apareceu pela '. $i+1 . 'ª vez <br>';
    }
}else{
    echo 'Você digitou um valor maior que 20, tente novamente com um valor menor';
}


?>
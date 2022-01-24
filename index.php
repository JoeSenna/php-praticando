<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando PHP</title>
</head>
<body>
    <h1>Basicão</h1>
    <p>Frase em uma tag p</p>
    <?php //sempre que for usar PHO ocm HTML, abra a tag
        echo 'Frase em um echo (frases são impressas usando o comando echo)' ;
        echo '<br>' ;
        $n1 = 10; //atribuiçaõ de variável
        $n2 = 5;
        $resultado = (($n1 + $n2) * $n1) * $n1; //cálculos com variáveis
        echo '(('. $n1 .' + '. $n2 .') * '. $n1 .') * '. $n1 .' = ' .$resultado. '<br>';//impressão de frases com concatenação
        echo 'Trabalhando com casas decimais = R$ '. number_format($resultado,2,',', '.');
        /*
        number_format é usado para formatar a impresão de valores na tela
        number_format($variavel, quantia de casas depois da vírgula, símbolo para os centavos, símbolo para o milhar)
        */
    ?>

    <hr>
    <h1>Formulário</h1>
    <form action="second.php" method="post"><!--Sempre usar método POST por questões de segurança-->
        <input type="number" name="n1" placeholder="Digite um número">
        <input type="submit" value="Ir para a próxima tela"><!--Botão que envia para a página declarada no action-->
    </form>
    
    <hr>
    <h1>Array</h1>
    <form action="third.php" method="post">
        <p>Clique e veja todas as classes</p>
        <input type="submit" value="Acessar">
    </form>
    
    <hr>
    <h1>Functions</h1>
    <form action="fourth.php" method="post">
        <p>Digite um valor para escolher o personagem (de 0 até 5)</p>
        <input type="number" name="id" placeholder="Número do persoangem">
        <input type="submit" value="Escolher Personagem">
    </form>
    
</body>
</html>